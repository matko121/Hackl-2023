<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://campuspress.com
 * @since      1.0.0
 *
 * @package    Divi_Accessibility
 * @subpackage Divi_Accessibility/admin/partials
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

?>

<div class="wrap">

	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

	<?php settings_errors(); ?>

	<div class="da11y-settings-information">

		<h2>Divi Accessibility <?php echo esc_html( $this->version ); ?></h2>

		<a style="display: block;" target="_blank" href="https://campuspress.com">

			<span class="screen-reader-text">CampusPress</span>

			<!-- CampusPress Logo -->
			<svg aria-hidden="true" style="width: 100%; height: auto;" xmlns="http://www.w3.org/2000/svg" width="201" height="43" viewBox="0 0 201 43"><g fill="none" fill-rule="evenodd"><path fill="#61BF83" d="M31.797 16.471C31.797 15.809 32.334 15.272 32.997 15.272 33.66 15.272 34.197 15.809 34.197 16.471 34.197 17.134 33.66 17.671 32.997 17.671 32.334 17.671 31.797 17.134 31.797 16.471zM7.544 40.247C7.544 38.922 8.619 37.847 9.944 37.847 11.269 37.847 12.343 38.922 12.343 40.247 12.343 41.572 11.269 42.647 9.944 42.647 8.619 42.647 7.544 41.572 7.544 40.247z"/><path fill="#1C596B" d="M20.921 36.108C18.963 36.108 17.107 35.778 15.403 35.125 13.673 34.465 12.147 33.481 10.869 32.204 8.189 29.576 6.824 26.028 6.824 21.673 6.824 17.319 8.189 13.771 10.881 11.132 13.489 8.55 16.876 7.239 20.938 7.239 22.866 7.239 24.57 7.485 26.004 7.969 27.366 8.427 28.403 8.854 29.174 9.271 30.175 9.816 30.716 10.247 31.039 10.756 31.362 11.271 31.522 11.869 31.522 12.541 31.522 13.318 31.235 14.044 30.693 14.639 30.119 15.27 29.345 15.617 28.516 15.617 27.891 15.617 27.374 15.509 26.935 15.287 26.067 14.832 25.192 14.468 24.308 14.195 23.49 13.942 22.422 13.814 21.133 13.814 19.901 13.814 18.783 14.019 17.813 14.422 16.864 14.817 16.068 15.36 15.444 16.039 14.162 17.435 13.538 19.279 13.538 21.673 13.538 24.068 14.162 25.912 15.446 27.311 16.826 28.805 18.729 29.533 21.258 29.533 22.464 29.533 23.49 29.405 24.307 29.152 25.192 28.879 26.067 28.515 26.91 28.072 27.374 27.838 27.891 27.73 28.516 27.73 29.345 27.73 30.119 28.077 30.693 28.709 31.235 29.303 31.522 30.035 31.522 30.824 31.522 32.115 30.886 33.175 29.779 33.73 28.643 34.359 27.351 34.925 26.002 35.38 24.565 35.863 22.854 36.108 20.921 36.108zM11.772 4.988C11.772 4.325 12.309 3.788 12.972 3.788 13.634 3.788 14.172 4.325 14.172 4.988 14.172 5.65 13.634 6.188 12.972 6.188 12.309 6.188 11.772 5.65 11.772 4.988zM34.764 36.108C34.764 35.114 35.57 34.308 36.564 34.308 37.558 34.308 38.364 35.114 38.364 36.108 38.364 37.102 37.558 37.907 36.564 37.907 35.57 37.907 34.764 37.102 34.764 36.108zM0 21.667C0 20.673.806 19.868 1.8 19.868 2.794 19.868 3.599 20.673 3.599 21.667 3.599 22.661 2.794 23.467 1.8 23.467.806 23.467 0 22.661 0 21.667z"/><path fill="#61BF83" d="M30.34 2.999C30.34 1.343 31.683 0 33.339 0 34.996 0 36.339 1.343 36.339 2.999 36.339 4.656 34.996 5.999 33.339 5.999 31.683 5.999 30.34 4.656 30.34 2.999zM56.182 26.866C56.29 26.811 56.442 26.785 56.64 26.785 56.836 26.785 57.006 26.863 57.148 27.019 57.29 27.175 57.361 27.355 57.361 27.558 57.361 27.924 57.212 28.183 56.914 28.331 56.276 28.683 55.595 28.981 54.869 29.225 54.144 29.47 53.275 29.592 52.265 29.592 51.254 29.592 50.315 29.426 49.447 29.094 48.579 28.762 47.826 28.277 47.188 27.639 45.832 26.309 45.154 24.527 45.154 22.288 45.154 20.05 45.832 18.267 47.188 16.936 48.504 15.635 50.2 14.983 52.275 14.983 53.279 14.983 54.144 15.105 54.869 15.35 55.595 15.594 56.151 15.821 56.538 16.031 56.924 16.242 57.158 16.411 57.239 16.54 57.321 16.669 57.361 16.832 57.361 17.028 57.361 17.225 57.29 17.401 57.148 17.558 57.006 17.714 56.836 17.791 56.64 17.791 56.442 17.791 56.29 17.765 56.182 17.71 55.639 17.425 55.083 17.194 54.514 17.018 53.943 16.842 53.234 16.754 52.387 16.754 51.539 16.754 50.772 16.896 50.088 17.181 49.403 17.466 48.83 17.859 48.369 18.361 47.46 19.351 47.006 20.66 47.006 22.288 47.006 23.916 47.46 25.225 48.369 26.215 49.358 27.286 50.722 27.822 52.458 27.822 53.259 27.822 53.943 27.735 54.514 27.558 55.083 27.382 55.639 27.15 56.182 26.866zM68.267 24.058L65.52 17.445 62.773 24.058 68.267 24.058zM71.99 28.168C72.058 28.331 72.092 28.504 72.092 28.686 72.092 28.87 72.01 29.05 71.848 29.225 71.685 29.402 71.427 29.49 71.074 29.49 70.722 29.49 70.464 29.301 70.301 28.921L68.979 25.748 62.061 25.748 60.738 28.921C60.575 29.301 60.317 29.49 59.965 29.49 59.612 29.49 59.355 29.402 59.192 29.225 59.029 29.05 58.948 28.87 58.948 28.686 58.948 28.504 58.981 28.331 59.05 28.168L64.238 15.92C64.482 15.363 64.875 15.085 65.418 15.085L65.621 15.085C66.164 15.085 66.558 15.363 66.802 15.92L71.99 28.168zM90.098 15.482C90.355 15.747 90.484 16.061 90.484 16.428L90.484 28.575C90.484 28.834 90.397 29.05 90.22 29.225 90.044 29.402 89.826 29.49 89.569 29.49 89.312 29.49 89.091 29.402 88.907 29.225 88.725 29.05 88.633 28.834 88.633 28.575L88.633 17.018 83.933 28.636C83.824 28.894 83.655 29.1 83.425 29.257 83.193 29.412 82.929 29.49 82.631 29.49 82.332 29.49 82.068 29.412 81.837 29.257 81.606 29.1 81.438 28.894 81.329 28.636L76.629 17.018 76.629 28.575C76.629 28.834 76.537 29.05 76.355 29.225 76.171 29.402 75.95 29.49 75.692 29.49 75.435 29.49 75.218 29.402 75.042 29.225 74.865 29.05 74.777 28.834 74.777 28.575L74.777 16.428C74.777 16.061 74.905 15.747 75.163 15.482 75.421 15.218 75.732 15.085 76.099 15.085L76.771 15.085C77.042 15.085 77.29 15.167 77.514 15.329 77.737 15.492 77.903 15.695 78.012 15.939L82.631 27.456 87.249 15.939C87.357 15.695 87.524 15.492 87.748 15.329 87.972 15.167 88.219 15.085 88.49 15.085L89.162 15.085C89.528 15.085 89.84 15.218 90.098 15.482zM100.006 22.472C101.403 22.472 102.414 22.173 103.038 21.576 103.526 21.115 103.771 20.491 103.771 19.704 103.771 18.442 103.14 17.601 101.878 17.181 101.39 17.018 100.766 16.936 100.006 16.936L96.486 16.936 96.486 22.472 100.006 22.472zM100.189 15.187C102.074 15.187 103.492 15.676 104.441 16.652 105.229 17.438 105.622 18.456 105.622 19.704 105.622 20.952 105.229 21.97 104.441 22.756 103.492 23.732 102.074 24.222 100.189 24.222L96.486 24.222 96.486 28.575C96.486 28.834 96.395 29.05 96.212 29.225 96.028 29.402 95.808 29.49 95.55 29.49 95.292 29.49 95.075 29.402 94.899 29.225 94.723 29.05 94.635 28.834 94.635 28.575L94.635 16.123C94.635 15.865 94.723 15.644 94.899 15.462 95.075 15.278 95.292 15.187 95.55 15.187L100.189 15.187zM119.09 15.085C119.348 15.085 119.568 15.177 119.751 15.36 119.935 15.543 120.026 15.764 120.026 16.021L120.026 24.058C120.026 25.835 119.389 27.232 118.113 28.249 117.015 29.144 115.706 29.592 114.187 29.592 112.641 29.592 111.324 29.144 110.239 28.249 108.979 27.232 108.348 25.835 108.348 24.058L108.348 16.021C108.348 15.764 108.436 15.543 108.612 15.36 108.788 15.177 109.005 15.085 109.263 15.085 109.521 15.085 109.741 15.177 109.924 15.36 110.107 15.543 110.199 15.764 110.199 16.021L110.199 24.119C110.199 25.326 110.612 26.275 111.44 26.968 112.199 27.592 113.115 27.903 114.187 27.903 115.258 27.903 116.174 27.592 116.934 26.968 117.761 26.275 118.175 25.326 118.175 24.119L118.175 16.021C118.175 15.764 118.263 15.543 118.439 15.36 118.615 15.177 118.832 15.085 119.09 15.085zM128.368 27.843C130.741 27.843 131.929 27.062 131.929 25.503 131.929 24.851 131.475 24.329 130.565 23.936 130.172 23.773 129.714 23.628 129.192 23.498 128.67 23.37 128.141 23.23 127.605 23.081 127.069 22.933 126.54 22.764 126.019 22.572 125.496 22.384 125.031 22.139 124.624 21.84 123.73 21.162 123.281 20.267 123.281 19.154 123.281 17.961 123.73 16.984 124.624 16.225 125.602 15.397 126.91 14.983 128.552 14.983 130.029 14.983 131.379 15.207 132.601 15.655 132.98 15.791 133.17 16.061 133.17 16.469 133.17 16.672 133.099 16.865 132.956 17.049 132.813 17.231 132.657 17.323 132.488 17.323 132.318 17.323 132.085 17.269 131.786 17.161 130.904 16.849 129.895 16.692 128.755 16.692 127.71 16.692 126.849 16.89 126.171 17.283 125.48 17.689 125.133 18.267 125.133 19.012 125.133 19.785 125.581 20.369 126.476 20.762 126.883 20.952 127.344 21.107 127.859 21.229 128.375 21.351 128.904 21.481 129.446 21.616 129.989 21.752 130.518 21.911 131.033 22.095 131.549 22.277 132.01 22.519 132.417 22.816 133.313 23.468 133.76 24.404 133.76 25.626 133.76 26.791 133.292 27.74 132.356 28.473 131.393 29.219 130.125 29.592 128.552 29.592 126.828 29.592 125.215 29.267 123.709 28.615 123.56 28.548 123.427 28.439 123.313 28.29 123.196 28.141 123.14 27.962 123.14 27.751 123.14 27.541 123.214 27.35 123.363 27.181 123.512 27.012 123.686 26.928 123.882 26.928 124.078 26.928 124.322 26.991 124.614 27.12 124.906 27.249 125.384 27.402 126.049 27.579 126.713 27.754 127.486 27.843 128.368 27.843z"/><path fill="#1C596B" d="M142.183 22.472C143.58 22.472 144.591 22.173 145.215 21.576 145.703 21.115 145.947 20.491 145.947 19.704 145.947 18.442 145.316 17.601 144.055 17.181 143.566 17.018 142.942 16.936 142.183 16.936L138.663 16.936 138.663 22.472 142.183 22.472zM142.366 15.187C144.251 15.187 145.669 15.676 146.618 16.652 147.405 17.438 147.799 18.456 147.799 19.704 147.799 20.952 147.405 21.97 146.618 22.756 145.669 23.732 144.251 24.222 142.366 24.222L138.663 24.222 138.663 28.575C138.663 28.834 138.571 29.05 138.389 29.225 138.205 29.402 137.984 29.49 137.727 29.49 137.469 29.49 137.252 29.402 137.076 29.225 136.899 29.05 136.812 28.834 136.812 28.575L136.812 16.123C136.812 15.865 136.899 15.644 137.076 15.462 137.252 15.278 137.469 15.187 137.727 15.187L142.366 15.187zM156.16 22.105C157.3 22.105 158.218 21.881 158.917 21.433 159.615 20.985 159.965 20.328 159.965 19.46 159.965 18.645 159.693 18.035 159.151 17.629 158.5 17.168 157.469 16.936 156.059 16.936L152.478 16.936 152.478 22.105 156.16 22.105zM161.694 28.575C161.694 28.834 161.605 29.05 161.43 29.225 161.253 29.402 161.029 29.49 160.758 29.49 160.486 29.49 160.267 29.405 160.097 29.236 159.928 29.066 159.843 28.847 159.843 28.575L159.843 27.965C159.843 26.866 159.721 26.058 159.477 25.543 159.232 25.028 158.899 24.618 158.48 24.312 158.059 24.007 157.462 23.855 156.689 23.855L152.478 23.855 152.478 28.575C152.478 28.834 152.386 29.05 152.203 29.225 152.02 29.402 151.799 29.49 151.541 29.49 151.283 29.49 151.066 29.402 150.891 29.225 150.714 29.05 150.626 28.834 150.626 28.575L150.626 16.123C150.626 15.865 150.714 15.644 150.891 15.462 151.066 15.278 151.283 15.187 151.541 15.187L156.282 15.187C158.141 15.187 159.544 15.581 160.494 16.367 161.375 17.113 161.816 18.097 161.816 19.317 161.816 20.104 161.596 20.837 161.155 21.515 160.714 22.193 160.046 22.688 159.151 23.001 160.128 23.259 160.833 23.963 161.267 25.116 161.552 25.889 161.694 26.73 161.694 27.639L161.694 28.575zM175.012 27.915C175.181 28.084 175.266 28.29 175.266 28.535 175.266 28.778 175.181 28.981 175.012 29.144 174.842 29.308 174.635 29.389 174.391 29.389L166.231 29.389C165.974 29.389 165.757 29.301 165.581 29.124 165.404 28.949 165.316 28.73 165.316 28.473L165.316 16.123C165.316 15.865 165.404 15.644 165.581 15.462 165.757 15.278 165.974 15.187 166.231 15.187L174.391 15.187C174.635 15.187 174.842 15.271 175.012 15.441 175.181 15.611 175.266 15.817 175.266 16.061 175.266 16.306 175.181 16.51 175.012 16.672 174.842 16.835 174.635 16.916 174.391 16.916L167.168 16.916 167.168 21.413 173.658 21.413C173.902 21.413 174.109 21.498 174.279 21.667 174.448 21.837 174.533 22.045 174.533 22.288 174.533 22.532 174.448 22.735 174.279 22.898 174.109 23.061 173.902 23.142 173.658 23.142L167.168 23.142 167.168 27.66 174.391 27.66C174.635 27.66 174.842 27.744 175.012 27.915zM182.793 27.843C185.166 27.843 186.354 27.062 186.354 25.503 186.354 24.851 185.899 24.329 184.99 23.936 184.597 23.773 184.139 23.628 183.617 23.498 183.095 23.37 182.565 23.23 182.03 23.081 181.494 22.933 180.965 22.764 180.443 22.572 179.921 22.384 179.456 22.139 179.049 21.84 178.154 21.162 177.706 20.267 177.706 19.154 177.706 17.961 178.154 16.984 179.049 16.225 180.026 15.397 181.335 14.983 182.977 14.983 184.454 14.983 185.804 15.207 187.025 15.655 187.404 15.791 187.595 16.061 187.595 16.469 187.595 16.672 187.523 16.865 187.381 17.049 187.238 17.231 187.082 17.323 186.913 17.323 186.743 17.323 186.51 17.269 186.211 17.161 185.329 16.849 184.319 16.692 183.18 16.692 182.135 16.692 181.273 16.89 180.596 17.283 179.904 17.689 179.558 18.267 179.558 19.012 179.558 19.785 180.006 20.369 180.9 20.762 181.308 20.952 181.769 21.107 182.284 21.229 182.8 21.351 183.329 21.481 183.871 21.616 184.414 21.752 184.942 21.911 185.458 22.095 185.974 22.277 186.435 22.519 186.842 22.816 187.737 23.468 188.185 24.404 188.185 25.626 188.185 26.791 187.717 27.74 186.781 28.473 185.817 29.219 184.55 29.592 182.977 29.592 181.253 29.592 179.64 29.267 178.134 28.615 177.984 28.548 177.852 28.439 177.737 28.29 177.621 28.141 177.564 27.962 177.564 27.751 177.564 27.541 177.639 27.35 177.788 27.181 177.937 27.012 178.11 26.928 178.307 26.928 178.503 26.928 178.747 26.991 179.039 27.12 179.331 27.249 179.809 27.402 180.474 27.579 181.138 27.754 181.911 27.843 182.793 27.843zM195.529 27.843C197.902 27.843 199.09 27.062 199.09 25.503 199.09 24.851 198.636 24.329 197.727 23.936 197.333 23.773 196.875 23.628 196.354 23.498 195.831 23.37 195.302 23.23 194.767 23.081 194.23 22.933 193.701 22.764 193.18 22.572 192.657 22.384 192.192 22.139 191.785 21.84 190.891 21.162 190.442 20.267 190.442 19.154 190.442 17.961 190.891 16.984 191.785 16.225 192.763 15.397 194.071 14.983 195.713 14.983 197.19 14.983 198.54 15.207 199.762 15.655 200.141 15.791 200.331 16.061 200.331 16.469 200.331 16.672 200.26 16.865 200.117 17.049 199.975 17.231 199.818 17.323 199.649 17.323 199.48 17.323 199.246 17.269 198.947 17.161 198.065 16.849 197.056 16.692 195.916 16.692 194.871 16.692 194.01 16.89 193.332 17.283 192.641 17.689 192.294 18.267 192.294 19.012 192.294 19.785 192.742 20.369 193.637 20.762 194.044 20.952 194.505 21.107 195.021 21.229 195.536 21.351 196.065 21.481 196.607 21.616 197.15 21.752 197.679 21.911 198.194 22.095 198.71 22.277 199.171 22.519 199.578 22.816 200.474 23.468 200.921 24.404 200.921 25.626 200.921 26.791 200.453 27.74 199.518 28.473 198.554 29.219 197.286 29.592 195.713 29.592 193.989 29.592 192.376 29.267 190.87 28.615 190.721 28.548 190.588 28.439 190.474 28.29 190.357 28.141 190.301 27.962 190.301 27.751 190.301 27.541 190.375 27.35 190.524 27.181 190.673 27.012 190.847 26.928 191.043 26.928 191.239 26.928 191.483 26.991 191.775 27.12 192.067 27.249 192.545 27.402 193.21 27.579 193.874 27.754 194.647 27.843 195.529 27.843z"/></g></svg>

		</a>

		<h3>Resources</h3>

		<ul>

			<li><a target="_blank" href="https://www.w3.org/TR/WCAG20/">Web Content Accessibility Guidelines (WCAG) 2.0</a></li>

			<li><a target="_blank" href="https://khan.github.io/tota11y/">Tota11y</a></li>

		</ul>

	</div><!-- .settings-information -->

	<form action="options.php" method="post" class="da11y-settings">

		<?php settings_fields( $this->da11y ); ?>
		<?php do_settings_sections( $this->da11y ); ?>
		<?php submit_button(); ?>

	</form>

</div><!-- .wrap -->
