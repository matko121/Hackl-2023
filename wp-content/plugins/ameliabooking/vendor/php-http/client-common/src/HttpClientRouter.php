<?php

namespace AmeliaHttp\Client\Common;

use AmeliaHttp\Client\Exception\RequestException;
use AmeliaHttp\Client\HttpAsyncClient;
use AmeliaHttp\Client\HttpClient;
use AmeliaHttp\Message\RequestMatcher;
use Psr\Http\Client\ClientInterface;
use AmeliaPsr\Http\Message\RequestInterface;

/**
 * Route a request to a specific client in the stack based using a RequestMatcher.
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
final class HttpClientRouter implements HttpClient, HttpAsyncClient
{
    /**
     * @var array
     */
    private $clients = [];

    /**
     * {@inheritdoc}
     */
    public function sendRequest(RequestInterface $request)
    {
        $client = $this->chooseHttpClient($request);

        return $client->sendRequest($request);
    }

    /**
     * {@inheritdoc}
     */
    public function sendAsyncRequest(RequestInterface $request)
    {
        $client = $this->chooseHttpClient($request);

        return $client->sendAsyncRequest($request);
    }

    /**
     * Add a client to the router.
     *
     * @param HttpClient|HttpAsyncClient|ClientInterface $client
     * @param RequestMatcher             $requestMatcher
     */
    public function addClient($client, RequestMatcher $requestMatcher)
    {
        $this->clients[] = [
            'matcher' => $requestMatcher,
            'client' => new FlexibleHttpClient($client),
        ];
    }

    /**
     * Choose an HTTP client given a specific request.
     *
     * @param RequestInterface $request
     *
     * @return HttpClient|HttpAsyncClient|ClientInterface
     */
    protected function chooseHttpClient(RequestInterface $request)
    {
        foreach ($this->clients as $client) {
            if ($client['matcher']->matches($request)) {
                return $client['client'];
            }
        }

        throw new RequestException('No client found for the specified request', $request);
    }
}
