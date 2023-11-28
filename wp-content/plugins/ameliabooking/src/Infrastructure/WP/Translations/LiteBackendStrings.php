<?php

namespace AmeliaBooking\Infrastructure\WP\Translations;

/**
 * Class LiteBackendStrings
 *
 * @package AmeliaBooking\Infrastructure\WP\Translations
 *
 * @SuppressWarnings(ExcessiveMethodLength)
 * @SuppressWarnings(ExcessiveClassLength)
 * @phpcs:disable
 */
class LiteBackendStrings
{
    /**
     * Returns the array for the common strings
     *
     * @return array
     */
    public static function getCommonStrings()
    {
        return [
            'admin'                     => __('Admin', 'wpamelia'),
            'add_date'                  => __('Add Date', 'wpamelia'),
            'add_language'              => __('Add Language', 'wpamelia'),
            'all_services'              => __('All Services', 'wpamelia'),
            'appointment'               => __('Appointment', 'wpamelia'),
            'appointments'              => __('Appointments', 'wpamelia'),
            'approved'                  => __('Approved', 'wpamelia'),
            'booked'                    => __('Booked', 'wpamelia'),
            'cancel'                    => __('Cancel', 'wpamelia'),
            'canceled'                  => __('Canceled', 'wpamelia'),
            'capacity'                  => __('Spots', 'wpamelia'),
            'content_mode_tooltip'      => __('Don\'t use Text mode option if you already have HTML code in the description,<br>since once this option is enabled the existing HTML tags could be lost.', 'wpamelia'),
            'close'                     => __('Close', 'wpamelia'),
            'closed'                    => __('Closed', 'wpamelia'),
            'csv_delimiter'             => __('Select Delimiter', 'wpamelia'),
            'csv_delimiter_comma'       => __('Comma (,)', 'wpamelia'),
            'continue'                  => __('Continue', 'wpamelia'),
            'coupon_code'               => __('Coupon code', 'wpamelia'),
            'customer'                  => __('Customer', 'wpamelia'),
            'date'                      => __('Date', 'wpamelia'),
            'delete'                    => __('Delete', 'wpamelia'),
            'description'               => __('Description', 'wpamelia'),
            'details'                   => __('Details', 'wpamelia'),
            'disabled'                  => __('Disabled', 'wpamelia'),
            'duration'                  => __('Duration', 'wpamelia'),
            'duplicate'                 => __('Duplicate', 'wpamelia'),
            'edit'                      => __('Edit', 'wpamelia'),
            'email_placeholder'         => __('example@mail.com', 'wpamelia'),
            'employee'                  => __('Employee', 'wpamelia'),
            'enter_email_warning'       => __('Please enter email', 'wpamelia'),
            'enter_valid_email_warning' => __('Please enter a valid email address', 'wpamelia'),
            'error'                     => __('Error', 'wpamelia'),
            'event'                     => __('Event', 'wpamelia'),
            'events'                    => __('Events', 'wpamelia'),
            'export'                    => __('Export', 'wpamelia'),
            'extras'                    => __('Extras', 'wpamelia'),
            'extras_total_price'        => __('Extras total price', 'wpamelia'),
            'google_calendar'           => __('Google Calendar', 'wpamelia'),
            'google_meet_join'          => __('Join With Google Meet', 'wpamelia'),
            'outlook_calendar'          => __('Outlook Calendar', 'wpamelia'),
            'h'                         => __('h', 'wpamelia'),
            'id'                        => __('ID', 'wpamelia'),
            'language'                  => __('Language', 'wpamelia'),
            'lesson_space'              => __('Lesson Space', 'wpamelia'),
            'delete_amelia_short'       => __('Delete Amelia content', 'wpamelia'),
            'delete_amelia'             => __('Delete tables, roles, files and settings once the Amelia plugin is deleted.', 'wpamelia'),
            'delete_amelia_tooltip'     => __('Enable this option if you want to delete plugin tables, roles, files and settings<br>when deleting the plugin from plugins page', 'wpamelia'),
            'appointment_space_name'    => __('Appointment Space Name', 'wpamelia'),
            'event_space_name'          => __('Event Space Name', 'wpamelia'),
            'lesson_space_join'         => __('Join Space', 'wpamelia'),
            'lesson_space_pending'      => __('Create spaces for pending appointments', 'wpamelia'),
            'limit_extra_people'        => __('Limit the additional number of people', 'wpamelia'),
            'limit_extra_people_set'    => __('Set Limit', 'wpamelia'),
            'limit_extra_people_tooltip'=> __('Limit the number of people that one customer can add during the booking', 'wpamelia'),
            'lite_vs_premium'           => __('Lite vs Premium', 'wpamelia'),
            'location'                  => __('Location', 'wpamelia'),
            'locations'                 => __('Locations', 'wpamelia'),
            'min'                       => __('min', 'wpamelia'),
            'name'                      => __('Name', 'wpamelia'),
            'enter_name_warning'        => __('Please enter name', 'wpamelia'),
            'name_ascending'            => __('Name Ascending', 'wpamelia'),
            'name_descending'           => __('Name Descending', 'wpamelia'),
            'need_help'                 => __('Need Help', 'wpamelia'),
            'no'                        => __('No', 'wpamelia'),
            'no_results'                => __('There are no results...', 'wpamelia'),
            'no_packages_yet'           => __('You don\'t have any packages here yet...', 'wpamelia'),
            'no_resources_yet'          => __('You don\'t have any resources yet...', 'wpamelia'),
            'no_services_yet'           => __('You don\'t have any services here yet...', 'wpamelia'),
            'no-show'                   => __('No-show', 'wpamelia'),
            'note'                      => __('Note', 'wpamelia'),
            'note_internal'             => __('Note (Internal)', 'wpamelia'),
            'notifications'             => __('Notification', 'wpamelia'),
            'of'                        => __('of', 'wpamelia'),
            'on_site'                   => __('On-site', 'wpamelia'),
            'opened'                    => __('Opened', 'wpamelia'),
            'out_of'                    => __('out of', 'wpamelia'),
            'packages'                  => __('Packages', 'wpamelia'),
            'paid'                      => __('Paid', 'wpamelia'),
            'partially_paid'            => __('Partially Paid', 'wpamelia'),
            'payment'                   => __('Payment', 'wpamelia'),
            'payment_amount'            => __('Payment Amount', 'wpamelia'),
            'payment_method'            => __('Payment Method', 'wpamelia'),
            'payment_status'            => __('Payment Status', 'wpamelia'),
            'pending'                   => __('Pending', 'wpamelia'),
            'phone'                     => __('Phone', 'wpamelia'),
            'rejected'                  => __('Rejected', 'wpamelia'),
            'resources'                 => __('Resources', 'wpamelia'),
            'save'                      => __('Save', 'wpamelia'),
            'select_date_warning'       => __('Please select date', 'wpamelia'),
            'select_time_warning'       => __('Please select time', 'wpamelia'),
            'service'                   => __('Service', 'wpamelia'),
            'services'                  => __('Services', 'wpamelia'),
            'settings_saved'            => __('Settings has been saved', 'wpamelia'),
            'showing'                   => __('Showing', 'wpamelia'),
            'status'                    => __('Status', 'wpamelia'),
            'status_colon'              => __('Status:', 'wpamelia'),
            'success'                   => __('Success', 'wpamelia'),
            'text_mode'                 => __('Text Mode', 'wpamelia'),
            'html_mode'                 => __('HTML Mode', 'wpamelia'),
            'to'                        => __('to', 'wpamelia'),
            'today'                     => __('Today', 'wpamelia'),
            'tomorrow'                  => __('Tomorrow', 'wpamelia'),
            'total'                     => __('Total', 'wpamelia'),
            'translate'                 => __('Translate', 'wpamelia'),
            'translation'               => __('Translation', 'wpamelia'),
            'view'                      => __('View', 'wpamelia'),
            'weekday_friday'            => __('Friday', 'wpamelia'),
            'weekday_monday'            => __('Monday', 'wpamelia'),
            'weekday_saturday'          => __('Saturday', 'wpamelia'),
            'weekday_sunday'            => __('Sunday', 'wpamelia'),
            'weekday_thursday'          => __('Thursday', 'wpamelia'),
            'weekday_tuesday'           => __('Tuesday', 'wpamelia'),
            'weekday_wednesday'         => __('Wednesday', 'wpamelia'),
            'yes'                       => __('Yes', 'wpamelia'),
            'zoom'                      => __('Zoom', 'wpamelia'),
            'zoom_click_to_join'        => __('Join Zoom Meeting', 'wpamelia'),
            'zoom_click_to_start'       => __('Start Zoom Meeting', 'wpamelia'),
            'whats_new'                 => __('What\'s new', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the settings strings
     *
     * @return array
     */
    public static function getSettingsStrings()
    {
        return [
            'activate'                               => __('Activate', 'wpamelia'),
            'activation'                             => __('Activation', 'wpamelia'),
            'activation_settings'                    => __('Activation Settings', 'wpamelia'),
            'activation_settings_description'        => __('Use this setting to activate the plugin code so you can have access to auto updates of Amelia', 'wpamelia'),
            'activation_settings_explanation'        => __('Activate the plugin by entering Purchase code or using Envato API.', 'wpamelia'),
            'add_web_hook'                           => __('Add New Web Hook', 'wpamelia'),
            'add_to_calendar'                        => __('Show Add To Calendar option to customers', 'wpamelia'),
            'add_to_calendar_tooltip'                => __('Suggest customers to add an appointment to their calendar<br/>when booking is finalized.', 'wpamelia'),
            'address'                                => __('Address', 'wpamelia'),
            'after'                                  => __('After', 'wpamelia'),
            'after_with_space'                       => __('After with space', 'wpamelia'),
            'allow_booking_if_not_min'               => __('Allow booking below minimum capacity', 'wpamelia'),
            'allow_admin_book_at_any_time'           => __('Allow admin to book appointment at any time', 'wpamelia'),
            'allow_admin_book_at_any_time_tooltip'   => __('If you enable this option, Admin will be able to book appointment at any time<br>(working hours, special days and days off for all employees will be ignored).', 'wpamelia'),
            'allow_configure_days_off'               => __('Configure their days off', 'wpamelia'),
            'allow_configure_services'               => __('Configure their services', 'wpamelia'),
            'allow_configure_schedule'               => __('Configure their schedule', 'wpamelia'),
            'allow_configure_special_days'           => __('Configure their special days', 'wpamelia'),
            'allow_booking_if_pending'               => __('Allow booking above maximum capacity', 'wpamelia'),
            'allow_customer_reschedule'              => __('Allow customers to reschedule their own appointments', 'wpamelia'),
            'allow_customer_reschedule_tooltip'      => __('Enable this option if you want to allow your customers to reschedule their own appointments.', 'wpamelia'),
            'allow_customer_delete_profile'          => __('Allow customers to delete their profile', 'wpamelia'),
            'allow_customer_cancel_packages'         => __('Allow customers to cancel packages', 'wpamelia'),
            'allow_write_appointments'               => __('Manage their appointments', 'wpamelia'),
            'allow_write_events'                     => __('Manage their events', 'wpamelia'),
            'appointments_settings'                  => __('Appointments Settings', 'wpamelia'),
            'appointments_settings_description'      => __('Use these settings to manage frontend bookings', 'wpamelia'),
            'approve_appointment_success_url'        => __('Redirect URL for Successfully Approved Booking', 'wpamelia'),
            'approve_appointment_error_url'          => __('Redirect URL for Unsuccessfully Approved Booking', 'wpamelia'),
            'automatically_create_customer'          => __('Automatically create Amelia Customer user', 'wpamelia'),
            'automatically_create_customer_tooltip'  => __('If you enable this option every time a new customer schedules the appointment<br/>he will get Amelia Customer user role and automatic email with login details.', 'wpamelia'),
            'back_links'                             => __('Support Amelia by enabling this option', 'wpamelia'),
            'back_links_tooltip'                     => __('Allow the short description below the booking form to support<br/>Amelia Booking Plugin and spread the word about it.', 'wpamelia'),
            'bcc_email'                              => __('Send all notifications to additional addresses', 'wpamelia'),
            'bcc_email_tooltip'                      => __('Here you can enter additional email addresses where all notifications will be sent.<br/>To add an address click Enter.', 'wpamelia'),
            'bcc_sms'                                => __('Send all SMS messages to additional numbers', 'wpamelia'),
            'bcc_sms_tooltip'                        => __('Here you can enter additional phone numbers where all SMS messages will be sent.<br/>To add a number click Enter.', 'wpamelia'),
            'before'                                 => __('Before', 'wpamelia'),
            'before_with_space'                      => __('Before with space', 'wpamelia'),
            'buffer_time_in_slot'                    => __('Include service buffer time in time slots', 'wpamelia'),
            'calendar'                               => __('Calendar', 'wpamelia'),
            'cancel_error_url'                       => __('Unsuccessful Cancellation Redirect URL', 'wpamelia'),
            'cancel_error_url_tooltip'               => __('URL on which will user be redirected if appointment can\'t be canceled<br/>because of \'Minimum time required before canceling\' value', 'wpamelia'),
            'cancel_success_url'                     => __('Successful Cancellation Redirect URL', 'wpamelia'),
            'cancel_url_placeholder'                 => __('Please enter URL', 'wpamelia'),
            'comma_dot'                              => __('Comma-Dot', 'wpamelia'),
            'company'                                => __('Company', 'wpamelia'),
            'company_settings'                       => __('Company Settings', 'wpamelia'),
            'company_settings_description'           => __('Use these settings to set up picture, name, address, phone and website of your company', 'wpamelia'),
            'cart_enable'                            => __('Cart', 'wpamelia'),
            'coupons'                                => __('Coupons', 'wpamelia'),
            'enable_google_meet'                     => __('Enable Google Meet', 'wpamelia'),
            'facebook_pixel'                         => __('Facebook Pixel', 'wpamelia'),
            'google_universal_analytics'             => __('Google Universal Analytics', 'wpamelia'),
            'google_analytics'                       => __('Google Analytics', 'wpamelia'),
            'employee_selection_logic'               => __('Employee selection logic', 'wpamelia'),
            'employee_selection_logic_random'        => __('Random', 'wpamelia'),
            'currency'                               => __('Currency', 'wpamelia'),
            'customize_page'                         => __('Customize Page', 'wpamelia'),
            'customers_as_attendees'                 => __('Add Event\'s Attendees', 'wpamelia'),
            'customer_cabinet'                       => __('Customer Panel Page URL', 'wpamelia'),
            'employee_cabinet'                       => __('Employee Panel Page URL', 'wpamelia'),
            'default_appointment_status'             => __('Default Appointment Status', 'wpamelia'),
            'default_appointment_status_tooltip'     => __('All appointments will be scheduled with the<br/>status you choose here.', 'wpamelia'),
            'default_items_per_page'                 => __('Default items per page', 'wpamelia'),
            'default_page_on_backend'                => __('Default page on back-end', 'wpamelia'),
            'default_payment_method'                 => __('Default Payment Method', 'wpamelia'),
            'default_phone_country_code'             => __('Default phone country code', 'wpamelia'),
            'default_time_slot_step'                 => __('Default Time Slot Step', 'wpamelia'),
            'default_time_slot_step_tooltip'         => __('The Time Slot Step you define here will be applied<br/>for all time slots in the plugin.', 'wpamelia'),
            'dot_comma'                              => __('Dot-Comma', 'wpamelia'),
            'enable_labels_settings'                 => __('Enable Labels Settings', 'wpamelia'),
            'enable_labels_settings_tooltip'         => __('Disable this option if you want to translate these<br/>strings using the third party translation plugin.', 'wpamelia'),
            'enable_customer_cabinet'                => __('Enable Customer Panel', 'wpamelia'),
            'enable_no_show_tag'                     => __('Enable No-show tag', 'wpamelia'),
            'enable_no_show_tag_tooltip'             => __('Enable this option if you want to see which Customers were a No-show', 'wpamelia'),
            'enable_employee_cabinet'                => __('Enable Employee Panel', 'wpamelia'),
            'enable_polyfill'                        => __('Enable usage for older IE browsers', 'wpamelia'),
            'envato_api'                             => __('Envato API', 'wpamelia'),
            'envato_api_activate'                    => __('Activate with Envato', 'wpamelia'),
            'event_title_and_description'            => __('Event Title and Description', 'wpamelia'),
            'meeting_title'                          => __('Meeting Title', 'wpamelia'),
            'meeting_agenda'                         => __('Meeting Agenda', 'wpamelia'),
            'general'                                => __('General', 'wpamelia'),
            'general_settings'                       => __('General Settings', 'wpamelia'),
            'general_labels_warning'                 => __('Please note that these labels are applied only to the old booking forms and WooCommerce payments. To set labels for the 2.0 Amelia Booking forms kindly visit the', 'wpamelia'),
            'general_settings_description'           => __('Use these settings to define plugin general settings and default settings for your services and appointments', 'wpamelia'),
            'gMap_api_key'                           => __('Google Map API Key', 'wpamelia'),
            'gMap_api_key_tooltip'                   => __('Add Google Map API Key to show Google static map on<br/>"Locations" page.', 'wpamelia'),
            'google_client_id'                       => __('Client ID', 'wpamelia'),
            'google_client_secret'                   => __('Client Secret', 'wpamelia'),
            'outlook_client_id'                      => __('Application (client) ID', 'wpamelia'),
            'outlook_client_secret'                  => __('Client Secret', 'wpamelia'),
            'google_redirect_uri'                    => __('Redirect URI', 'wpamelia'),
            'outlook_redirect_uri'                   => __('Redirect URI', 'wpamelia'),
            'zoom_api_key'                           => __('Client Key', 'wpamelia'),
            'zoom_api_secret'                        => __('Client Secret', 'wpamelia'),
            'zoom_jwt_warning'                       => __('The JWT app type is deprecated. We recommend that you create Server-to-Server OAuth', 'wpamelia'),
            'zoom_s2s'                               => __('Enable Server-to-Server OAuth', 'wpamelia'),
            'zoom_account_id'                        => __('Account ID', 'wpamelia'),
            'zoom_client_id'                         => __('Client ID', 'wpamelia'),
            'zoom_client_secret'                     => __('Client Secret', 'wpamelia'),
            'lesson_space_api_key'                   => __('Lesson Space API Key', 'wpamelia'),
            'limit_app_per_customer'                 => __('Limit appointments per customer', 'wpamelia'),
            'limit_package_per_customer'             => __('Limit package purchases per customer', 'wpamelia'),
            'limit_events_per_customer'              => __('Limit events per customer', 'wpamelia'),
            'integrations_settings'                  => __('Integrations', 'wpamelia'),
            'integrations_settings_description'      => __("Manage Google Calendar Integration, Outlook Calendar Integration, Zoom Integration and Web Hooks", 'wpamelia'),
            'h1'                                     => __('1h', 'wpamelia'),
            'h10'                                    => __('10h', 'wpamelia'),
            'h11'                                    => __('11h', 'wpamelia'),
            'h12'                                    => __('12h', 'wpamelia'),
            'h1min30'                                => __('1h 30min', 'wpamelia'),
            'h2'                                     => __('2h', 'wpamelia'),
            'h3'                                     => __('3h', 'wpamelia'),
            'h4'                                     => __('4h', 'wpamelia'),
            'h6'                                     => __('6h', 'wpamelia'),
            'h8'                                     => __('8h', 'wpamelia'),
            'h9'                                     => __('9h', 'wpamelia'),
            'identify_country_code'                  => __('Identify country code by user\'s IP address', 'wpamelia'),
            'insert_pending_appointments'            => __('Insert Pending Appointments', 'wpamelia'),
            'pending_appointments_meetings'          => __('Create Meetings For Pending Appointments', 'wpamelia'),
            'inspect_customer_info'                  => __('Check customer\'s name for existing email when booking', 'wpamelia'),
            'inspect_customer_info_tooltip'          => __('Enable this option if you don\'t want to allow "existing customer"<br/>to use different first and last name when booking.', 'wpamelia'),
            'label_employee'                         => __('Employee', 'wpamelia'),
            'label_employees'                        => __('Employees', 'wpamelia'),
            'label_service'                          => __('Service', 'wpamelia'),
            'label_services'                         => __('Services', 'wpamelia'),
            'labels'                                 => __('Labels', 'wpamelia'),
            'labels_settings'                        => __('Labels Settings', 'wpamelia'),
            'labels_settings_description'            => __('Use these settings to change labels on frontend pages', 'wpamelia'),
            'mail_service'                           => __('Mail Service', 'wpamelia'),
            'mailgun'                                => __('Mailgun', 'wpamelia'),
            'manage_languages'                       => __('Manage languages', 'wpamelia'),
            'manage_languages_tooltip'               => __('Here you can define languages that you want to have in the plugin<br>for translating dynamic strings (names, descriptions, notifications).', 'wpamelia'),
            'marketing_tools'                        => __('Marketing Tools', 'wpamelia'),
            'min1'                                   => __('1min', 'wpamelia'),
            'min10'                                  => __('10min', 'wpamelia'),
            'min12'                                  => __('12min', 'wpamelia'),
            'min15'                                  => __('15min', 'wpamelia'),
            'min2'                                   => __('2min', 'wpamelia'),
            'min20'                                  => __('20min', 'wpamelia'),
            'min30'                                  => __('30min', 'wpamelia'),
            'min45'                                  => __('45min', 'wpamelia'),
            'min5'                                   => __('5min', 'wpamelia'),
            'minimum_time_before_booking'            => __('Minimum time required before booking', 'wpamelia'),
            'minimum_time_before_booking_tooltip'    => __('Set the time before the appointment when customers<br/>will not be able to book the appointment.', 'wpamelia'),
            'minimum_time_before_canceling'          => __('Minimum time required before canceling', 'wpamelia'),
            'minimum_time_before_canceling_tooltip'  => __('Set the time before the appointment when customers<br/>will not be able to cancel the appointment.', 'wpamelia'),
            'minimum_time_before_rescheduling'       => __('Minimum time required before rescheduling', 'wpamelia'),
            'minimum_time_before_rescheduling_tooltip'  => __('Set the time before the appointment when customers<br/>will not be able to reschedule the appointment.', 'wpamelia'),
            'notifications_settings'                 => __('Notification Settings', 'wpamelia'),
            'notifications_settings_description'     => __('Use these settings to set your mail settings which will be used to notify your customers and employees', 'wpamelia'),
            'notify_customers_default'               => __('Notify the customer(s) by default', 'wpamelia'),
            'number_of_events_returned'              => __('Maximum Number Of Events Returned', 'wpamelia'),
            'outdated'                               => __('Outdated', 'wpamelia'),
            'payment_links_enable'                   => __('Allow payment via Payment Link', 'wpamelia'),
            'payments'                               => __('Payments', 'wpamelia'),
            'payments_settings'                      => __('Payments Settings', 'wpamelia'),
            'payments_settings_description'          => __('Use these settings to set price format, payment method and coupons that will be used in all bookings', 'wpamelia'),
            'period_available_for_booking'           => __('Period available for booking in advance', 'wpamelia'),
            'period_available_for_booking_tooltip'   => __('Set how far customers can book.', 'wpamelia'),
            'php_mail'                               => __('PHP Mail', 'wpamelia'),
            'price_number_of_decimals'               => __('Price Number Of Decimals', 'wpamelia'),
            'price_separator'                        => __('Price Separator', 'wpamelia'),
            'price_symbol_position'                  => __('Price Symbol Position', 'wpamelia'),
            'purchase_code'                          => __('Purchase code', 'wpamelia'),
            'provider_details_settings'              => __('Provider Details', 'wpamelia'),
            'provider_details_settings_description'  => __('Use this setting to configure provider details', 'wpamelia'),
            'recaptcha_enabled'                      => __('Enable Google reCAPTCHA', 'wpamelia'),
            'redirect_urls'                          => __('Redirect URLs', 'wpamelia'),
            'redirect_url_after_appointment'         => __('Redirect URL After Booking', 'wpamelia'),
            'redirect_url_after_appointment_tooltip' => __('Customer will be redirected to this URL once he schedules the appointment.', 'wpamelia'),
            'remove_google_busy_slots'               => __('Remove Google Calendar Busy Slots', 'wpamelia'),
            'remove_outlook_busy_slots'              => __('Remove Outlook Calendar Busy Slots', 'wpamelia'),
            'include_buffer_time_google'             => __('Include Buffer time in Google events', 'wpamelia'),
            'include_buffer_time_outlook'            => __('Include Buffer time in Outlook events', 'wpamelia'),
            'reject_appointment_success_url'         => __('Redirect URL for Successfully Rejected Booking', 'wpamelia'),
            'reject_appointment_error_url'           => __('Redirect URL for Unsuccessfully Rejected Booking', 'wpamelia'),
            'require_cabinet_password'               => __('Require password for login', 'wpamelia'),
            'required_email_field'                   => __('Set email as a mandatory field', 'wpamelia'),
            'required_phone_number_field'            => __('Set a phone number as a mandatory field', 'wpamelia'),
            'roles_settings'                         => __('Roles Settings', 'wpamelia'),
            'roles_settings_description'             => __('Use these settings to define settings that will be applied for the specific Amelia roles', 'wpamelia'),
            'send_event_invitation_email'            => __('Send Event Invitation Email', 'wpamelia'),
            'send_ics_attachment_approved'           => __('Send ics file for Approved bookings', 'wpamelia'),
            'send_ics_attachment_pending'            => __('Send ics file for Pending bookings', 'wpamelia'),
            'send_ics_attachment_approved_tooltip'   => __('Enable this option if you want to send ics file in email after approved bookings.', 'wpamelia'),
            'send_ics_attachment_pending_tooltip'    => __('Enable this option if you want to send ics file in email after pending bookings.', 'wpamelia'),
            'send_sms_balance_low_email'             => __('Remind me when my SMS balance is low', 'wpamelia'),
            'send_sms_balance_low_email_tooltip'     => __('Enable this option to receive a reminder email when your SMS balance reaches set minimum', 'wpamelia'),
            'send_sms_balance_low_minimum'           => __('Credit minimum to send reminder', 'wpamelia'),
            'send_sms_balance_low_to_email'          => __('Send to e-mail', 'wpamelia'),
            'sender_email'                           => __('Sender Email', 'wpamelia'),
            'sender_email_warning'                   => __('Please enter sender email', 'wpamelia'),
            'sender_name'                            => __('Sender Name', 'wpamelia'),
            'sender_name_warning'                    => __('Please enter sender name', 'wpamelia'),
            'service_duration_as_slot'               => __('Use service duration for booking a time slot', 'wpamelia'),
            'service_duration_as_slot_tooltip'       => __('Enable this option if you want to make time slot step<br/>the same as service duration in the booking process', 'wpamelia'),
            'set_ics_description'                    => __('Set Ics File Description', 'wpamelia'),
            'settings'                               => __('Settings', 'wpamelia'),
            'show_attendees'                         => __('Allow customers to see other attendees', 'wpamelia'),
            'show_client_time_zone'                  => __('Show booking slots in client time zone', 'wpamelia'),
            'show_client_time_zone_tooltip'          => __('Enable this option if you want to show booking slots<br/>in client time zone.', 'wpamelia'),
            'smtp'                                   => __('SMTP', 'wpamelia'),
            'space_comma'                            => __('Space-Comma', 'wpamelia'),
            'space_dot'                              => __('Space-Dot', 'wpamelia'),
            'stash_entities'                         => __('Load Entities on page load', 'wpamelia'),
            'stash_entities_tooltip'                 => __('Enable this option if you want to avoid AJAX calls<br>for fetching entities (services, employees, locations, packages, tags)', 'wpamelia'),
            'outlook_ssl_warning'                    => __('SSL (HTTPS) is not enabled. You will not be able to use Outlook Calendar integration until SSL is enabled.', 'wpamelia'),
            'update_for_all'                         => __('Update for all', 'wpamelia'),
            'custom_fields_upload_path'              => __('Attachment upload path', 'wpamelia'),
            'custom_fields_upload_path_tooltip'      => __('If you leave this field empty, all attachments will be uploaded into the Wordpress uploads folder.', 'wpamelia'),
            'view_activation_settings'               => __('View Activation Settings', 'wpamelia'),
            'view_appointments_settings'             => __('View Appointments Settings', 'wpamelia'),
            'view_company_settings'                  => __('View Company Settings', 'wpamelia'),
            'view_general_settings'                  => __('View General Settings', 'wpamelia'),
            'view_integrations_settings'             => __('View Integrations Settings', 'wpamelia'),
            'view_labels_settings'                   => __('View Labels Settings', 'wpamelia'),
            'view_notifications_settings'            => __('View Notifications Settings', 'wpamelia'),
            'view_payments_settings'                 => __('View Payments Settings', 'wpamelia'),
            'view_provider_details_settings'         => __('View Provider Details Settings', 'wpamelia'),
            'view_roles_settings_description'        => __('View Roles Settings', 'wpamelia'),
            'website'                                => __('Website', 'wpamelia'),
            'web_hooks'                              => __('Web Hooks', 'wpamelia'),
            'wp_mail'                                => __('WP Mail', 'wpamelia'),
            'hide_currency_symbol_frontend'          => __('Hide Currency Symbol on the booking form', 'wpamelia'),
            'custom_currency_symbol'                 => __('Custom Currency Symbol', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the email notifications strings
     *
     * @return array
     */
    public static function getNotificationsStrings()
    {
        return [
            'amelia_sms'                             => __('Amelia SMS', 'wpamelia'),
            'balance_colon'                          => __('Balance:', 'wpamelia'),
            'balance_recharged'                      => __('Your balance has been recharged', 'wpamelia'),
            'carrier'                                => __('Carrier:', 'wpamelia'),
            'change_alpha_sender_id'                 => __('Change Alpha Sender ID', 'wpamelia'),
            'change_password'                        => __('Change Password', 'wpamelia'),
            'cost_colon'                             => __('Cost:', 'wpamelia'),
            'create_notification'                    => __('Create New Notification', 'wpamelia'),
            'current_password_colon'                 => __('Current Password:', 'wpamelia'),
            'current_password_requred'               => __('Please enter current password', 'wpamelia'),
            'customer_appointment_approved'          => __('Appointment Approved', 'wpamelia'),
            'customer_appointment_canceled'          => __('Appointment Canceled', 'wpamelia'),
            'customer_appointment_follow_up'         => __('Appointment Follow Up', 'wpamelia'),
            'customer_appointment_next_day_reminder' => __('Appointment Next Day Reminder', 'wpamelia'),
            'customer_appointment_pending'           => __('Appointment Pending', 'wpamelia'),
            'customer_appointment_rejected'          => __('Appointment Rejected', 'wpamelia'),
            'customer_appointment_rescheduled'       => __('Appointment Rescheduled', 'wpamelia'),
            'customer_account_recovery'              => __('Customer Panel Access', 'wpamelia'),
            'customer_appointment_updated'           => __('Appointment Details Changed', 'wpamelia'),
            'customer_birthday_greeting'             => __('Birthday Greeting', 'wpamelia'),
            'customer_event_approved'                => __('Event Booked', 'wpamelia'),
            'customer_event_canceled'                => __('Event Canceled By Attendee', 'wpamelia'),
            'customer_event_follow_up'               => __('Event Follow Up', 'wpamelia'),
            'customer_event_next_day_reminder'       => __('Event Next Day Reminder', 'wpamelia'),
            'customer_event_rejected'                => __('Event Canceled By Admin', 'wpamelia'),
            'customer_event_rescheduled'             => __('Event Rescheduled', 'wpamelia'),
            'customer_event_updated'                 => __('Event Details Changed', 'wpamelia'),
            'customer_other_notifications'           => __('Other', 'wpamelia'),
            'provider_other_notifications'           => __('Other', 'wpamelia'),
            'customer_cart'                          => __('Cart Purchase', 'wpamelia'),
            'customer_package_canceled'              => __('Package Canceled', 'wpamelia'),
            'customer_package_purchased'             => __('Package Purchased', 'wpamelia'),
            'customize_sms'                          => __('Customize SMS', 'wpamelia'),
            'date_colon'                             => __('Date:', 'wpamelia'),
            'dont_have_an_account'                   => __('Don\'t have an account?', 'wpamelia'),
            'email_colon'                            => __('Email:', 'wpamelia'),
            'email_notifications'                    => __('Email Notifications', 'wpamelia'),
            'enter_password_warning'                 => __('Please enter password', 'wpamelia'),
            'enter_recipient_phone_warning'          => __('Please enter recipient phone', 'wpamelia'),
            'forgot_password'                        => __('Forgot Password?', 'wpamelia'),
            'incorrect_email'                        => __('You have entered an incorrect email', 'wpamelia'),
            'incorrect_password'                     => __('You have entered an incorrect password', 'wpamelia'),
            'insert_email_placeholders'              => __('Insert email placeholders', 'wpamelia'),
            'insert_email_placeholders_tooltip'      => __('Choose one of the placeholders from the lists below, click on it to copy and then paste into the template.', 'wpamelia'),
            'logout'                                 => __('Logout', 'wpamelia'),
            'message_colon'                          => __('Message:', 'wpamelia'),
            'messages_lower'                         => __('messages', 'wpamelia'),
            'new_password_colon'                     => __('New Password:', 'wpamelia'),
            'new_password_requred'                   => __('Please enter new password', 'wpamelia'),
            'notification_saved'                     => __('Notification has been saved', 'wpamelia'),
            'notification_template'                  => __('Notification Template', 'wpamelia'),
            'notifications'                          => __('Notifications', 'wpamelia'),
            'password_colon'                         => __('Password:', 'wpamelia'),
            'payment_history'                        => __('Payment History', 'wpamelia'),
            'ph_appointment_date'                    => __('Date of the appointment', 'wpamelia'),
            'ph_appointment_date_time'               => __('Date & Time of the appointment', 'wpamelia'),
            'ph_appointment_duration'                => __('Duration of the appointment', 'wpamelia'),
            'ph_appointment_end_time'                => __('End time of the appointment', 'wpamelia'),
            'ph_appointment_id'                      => __('Id of the appointment', 'wpamelia'),
            'ph_appointment_notes'                   => __('Appointment notes', 'wpamelia'),
            'ph_appointment_price'                   => __('Appointment price', 'wpamelia'),
            'ph_payment_type'                        => __('Payment type', 'wpamelia'),
            'ph_appointment_status'                  => __('Status of the appointment', 'wpamelia'),
            'ph_appointment_start_time'              => __('Start time of the appointment', 'wpamelia'),
            'ph_attendee_code'                       => __('Attendee code', 'wpamelia'),
            'ph_booked_customer'                     => __('Booked Customer (full name, email, phone)', 'wpamelia'),
            'ph_booking_number_of_persons'           => __('Number of people', 'wpamelia'),
            'ph_category_name'                       => __('Category name', 'wpamelia'),
            'ph_company_address'                     => __('Company address', 'wpamelia'),
            'ph_company_name'                        => __('Company name', 'wpamelia'),
            'ph_company_phone'                       => __('Company phone', 'wpamelia'),
            'ph_company_website'                     => __('Company website', 'wpamelia'),
            'ph_company_email'                       => __('Company email', 'wpamelia'),
            'ph_customer_email'                      => __('Customer email', 'wpamelia'),
            'ph_customer_first_name'                 => __('Customer first name', 'wpamelia'),
            'ph_customer_full_name'                  => __('Customer full name', 'wpamelia'),
            'ph_customer_last_name'                  => __('Customer last name', 'wpamelia'),
            'ph_customer_note'                       => __('Customer note', 'wpamelia'),
            'ph_customer_phone'                      => __('Customer phone', 'wpamelia'),
            'ph_employee_description'                => __('Employee description', 'wpamelia'),
            'ph_employee_email'                      => __('Employee email', 'wpamelia'),
            'ph_employee_first_name'                 => __('Employee first name', 'wpamelia'),
            'ph_employee_full_name'                  => __('Employee full name', 'wpamelia'),
            'ph_employee_last_name'                  => __('Employee last name', 'wpamelia'),
            'ph_employee_name_email_phone'           => __('Employee name, email & phone', 'wpamelia'),
            'ph_employee_note'                       => __('Employee note', 'wpamelia'),
            'ph_employee_phone'                      => __('Employee phone', 'wpamelia'),
            'ph_event_description'                   => __('Event description', 'wpamelia'),
            'ph_event_location'                      => __('Event Location', 'wpamelia'),
            'ph_event_end_date'                      => __('End date of the event', 'wpamelia'),
            'ph_event_end_date_time'                 => __('End date & time of the event', 'wpamelia'),
            'ph_event_end_time'                      => __('End time of the event', 'wpamelia'),
            'ph_event_name'                          => __('Event name', 'wpamelia'),
            'ph_event_period_date'                   => __('Date period of the event', 'wpamelia'),
            'ph_event_period_date_time'              => __('Date & Time period of the event', 'wpamelia'),
            'ph_event_price'                         => __('Event price', 'wpamelia'),
            'ph_booking_price'                       => __('Booking price', 'wpamelia'),
            'ph_event_start_date'                    => __('Start date of the event', 'wpamelia'),
            'ph_event_start_date_time'               => __('Start date & time of the event', 'wpamelia'),
            'ph_event_start_time'                    => __('Start time of the event', 'wpamelia'),
            'ph_group_event_details'                 => __('Group event details', 'wpamelia'),
            'ph_recurring_tooltip'                   => __('Set what details you want to send to your customers/employees about their recurring appointments.', 'wpamelia'),
            'ph_service_description'                 => __('Service description', 'wpamelia'),
            'ph_service_duration'                    => __('Service duration', 'wpamelia'),
            'ph_service_name'                        => __('Service name', 'wpamelia'),
            'ph_service_price'                       => __('Service price', 'wpamelia'),
            'ph_time_zone'                           => __('Time Zone', 'wpamelia'),
            'phone_colon'                            => __('Phone:', 'wpamelia'),
            'provider_cart'                          => __('Cart Purchase', 'wpamelia'),
            'companyPlaceholders'                    => __('Company', 'wpamelia'),
            'customerPlaceholders'                   => __('Customer', 'wpamelia'),
            'paymentPlaceholders'                    => __('Payment', 'wpamelia'),
            'employeePlaceholders'                   => __('Employee', 'wpamelia'),
            'categoryPlaceholders'                   => __('Category', 'wpamelia'),
            'locationPlaceholders'                   => __('Location', 'wpamelia'),
            'appointmentPlaceholders'                => __('Appointment', 'wpamelia'),
            'eventPlaceholders'                      => __('Event', 'wpamelia'),
            'extrasPlaceholders'                     => __('Extra', 'wpamelia'),
            'placeholder_copied'                     => __('Placeholder Copied', 'wpamelia'),
            'price'                                  => __('Price', 'wpamelia'),
            'pricing'                                => __('Pricing', 'wpamelia'),
            'provider_appointment_approved'          => __('Appointment Approved', 'wpamelia'),
            'provider_appointment_canceled'          => __('Appointment Canceled', 'wpamelia'),
            'provider_appointment_next_day_reminder' => __('Appointment Next Day Reminder', 'wpamelia'),
            'provider_appointment_updated'           => __('Appointment Details Changed', 'wpamelia'),
            'provider_package_canceled'              => __('Package Canceled', 'wpamelia'),
            'provider_package_purchased'             => __('Package Purchased', 'wpamelia'),
            'provider_panel_access'                  => __('Employee Panel Access', 'wpamelia'),
            'provider_panel_recovery'                => __('Employee Panel Recovery', 'wpamelia'),
            'provider_appointment_pending'           => __('Appointment Pending', 'wpamelia'),
            'provider_appointment_rejected'          => __('Appointment Rejected', 'wpamelia'),
            'provider_appointment_rescheduled'       => __('Appointment Rescheduled', 'wpamelia'),
            'provider_event_approved'                => __('Event Booked', 'wpamelia'),
            'provider_event_canceled'                => __('Event Canceled By Attendee', 'wpamelia'),
            'provider_event_next_day_reminder'       => __('Event Next Day Reminder', 'wpamelia'),
            'provider_event_rejected'                => __('Event Canceled By Admin', 'wpamelia'),
            'provider_event_rescheduled'             => __('Event Rescheduled', 'wpamelia'),
            'provider_event_updated'                 => __('Event Details Changed', 'wpamelia'),
            'queued'                                 => __('Queued', 'wpamelia'),
            're_type_requred'                        => __('Please enter new password again', 'wpamelia'),
            'recharge'                               => __('Recharge', 'wpamelia'),
            'recharge_balance'                       => __('Recharge Balance', 'wpamelia'),
            'recipient_email'                        => __('Recipient Email', 'wpamelia'),
            'refresh'                                => __('Refresh', 'wpamelia'),
            'requires_scheduling_setup'              => __('Requires Scheduling Setup', 'wpamelia'),
            'retype_new_password_colon'              => __('Re-type New Password:', 'wpamelia'),
            'security'                               => __('Security', 'wpamelia'),
            'segments_colon'                         => __('Segments:', 'wpamelia'),
            'send'                                   => __('Send', 'wpamelia'),
            'send_recovery_email'                    => __('Send Recovery Email', 'wpamelia'),
            'send_test_email'                        => __('Send Test Email', 'wpamelia'),
            'send_test_sms'                          => __('Send Test SMS', 'wpamelia'),
            'sender_id_colon'                        => __('Alpha Sender ID:', 'wpamelia'),
            'sign_in'                                => __('Sign In', 'wpamelia'),
            'sign_up'                                => __('Sign Up', 'wpamelia'),
            'sms_history'                            => __('SMS History', 'wpamelia'),
            'sms_notifications'                      => __('SMS Notifications', 'wpamelia'),
            'sms_vat_apply'                          => __('If you are from a country where VAT or GST applies, a VAT/GST charge will be added to the transaction.', 'wpamelia'),
            'status_colon'                           => __('Status:', 'wpamelia'),
            'subject'                                => __('Subject', 'wpamelia'),
            'test_email_error'                       => __('Email has not been sent', 'wpamelia'),
            'test_email_success'                     => __('Email has been sent', 'wpamelia'),
            'test_email_warning'                     => __('To be able to send test email please configure "Sender Email" in Notification Settings.', 'wpamelia'),
            'test_sms_warning'                       => __('To be able to send test SMS please recharge your balance.', 'wpamelia'),
            'text_colon'                             => __('Text:', 'wpamelia'),
            'time_colon'                             => __('Time:', 'wpamelia'),
            'to_customer'                            => __('To Customer', 'wpamelia'),
            'to_employee'                            => __('To Employee', 'wpamelia'),
            'user_colon'                             => __('User:', 'wpamelia'),
            'user_profile'                           => __('User Profile', 'wpamelia'),
            'view_pricing_for'                       => __('View pricing for:', 'wpamelia'),
            'view_profile'                           => __('View Profile', 'wpamelia'),
            'whatsapp_access_token'                  => __('Permanent access token', 'wpamelia'),
            'whatsapp_auto_reply_enable'             => __('Enable Auto-reply message', 'wpamelia'),
            'whatsapp_auto_reply_notice'             => __('Messages sent through WhatsApp are without a reply option, so we advise setting the “Auto-Reply” message', 'wpamelia'),
            'whatsapp_auto_reply_token'              => __('WhatsApp Webhook Verify Token', 'wpamelia'),
            'whatsapp_auto_reply_msg'                => __('WhatsApp Auto-reply message', 'wpamelia'),
            'whatsapp_business_id'                   => __('WhatsApp Business Account ID', 'wpamelia'),
            'whatsapp_default_language'              => __('Default language', 'wpamelia'),
            'whatsapp_notifications'                 => __('WhatsApp Notifications', 'wpamelia'),
            'whatsapp_enabled'                       => __('Enable WhatsApp Notifications', 'wpamelia'),
            'whatsapp_phone_id'                      => __('Phone number ID', 'wpamelia'),
            'whatsapp_settings'                      => __('Settings', 'wpamelia'),
            'whatsapp_webhook_url_callback'          => __('WhatsApp Webhook Callback URL', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the common strings
     *
     * @return array
     */
    public static function getDashboardStrings()
    {
        return [
            'appointments_count'            => __('# of appointments', 'wpamelia'),
            'appointments_revenue'          => __('Sum of payments', 'wpamelia'),
            'appointments_hours'            => __('# of Hours in appointment', 'wpamelia'),
            'appointments_load'             => __('% of load', 'wpamelia'),
            'approved_appointments'         => __('Approved Appointments', 'wpamelia'),
            'approved_appointments_tooltip' => __('Indicates the number of approved appointments<br/>for a chosen date range.', 'wpamelia'),
            'conversions'                   => __('Interests / Conversions', 'wpamelia'),
            'conversions_tooltip'           => __('Shows the number of views for the employee/service/location<br/>vs. the number of times they were booked during<br/>the selected date range.', 'wpamelia'),
            'customers_tooltip'             => __('Indicates the number of new and returning customers<br/>for the selected date range.', 'wpamelia'),
            'dashboard'                     => __('Dashboard', 'wpamelia'),
            'employees'                     => __('Employees', 'wpamelia'),
            'grab_yours'                    => __('Grab Yours', 'wpamelia'),
            'new'                           => __('New', 'wpamelia'),
            'no_upcoming_appointments'      => __('You don\'t have any upcoming appointments yet', 'wpamelia'),
            'not_show'                      => __('Don\'t show again', 'wpamelia'),
            'pending_appointments'          => __('Pending Appointments', 'wpamelia'),
            'percentage_of_load'            => __('Percentage of Load', 'wpamelia'),
            'percentage_of_load_tooltip'    => __('Indicates the percentage of occupied time against available time for appointments<br/>in the chosen date range.', 'wpamelia'),
            'returning'                     => __('Returning', 'wpamelia'),
            'revenue'                       => __('Revenue', 'wpamelia'),
            'revenue_tooltip'               => __('Shows the total income for paid appointments<br/>in the chosen date range.', 'wpamelia'),
            'time'                          => __('Time', 'wpamelia'),
            'views'                         => __('Views', 'wpamelia'),
            'hello_message_part0'           => __('Hello', 'wpamelia'),
            'hello_message_part1'           => __('You have', 'wpamelia'),
            'hello_message_part2'           => __('and', 'wpamelia'),
            'hello_message_part3'           => __('for today', 'wpamelia'),
            'upcoming_appointments'         => __('Upcoming appointments', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the schedule modal
     *
     * @return array
     */
    public static function getScheduleStrings()
    {
        return [
            'add_day_off'                         => __('Add Day Off', 'wpamelia'),
            'add_special_day'                     => __('Add Special Day', 'wpamelia'),
            'apply_to_all_days'                   => __('Apply to All Days', 'wpamelia'),
            'breaks'                              => __('Breaks', 'wpamelia'),
            'day_off_name'                        => __('Day Off name', 'wpamelia'),
            'days_off'                            => __('Days Off', 'wpamelia'),
            'once_off'                            => __('Once Off', 'wpamelia'),
            'repeat_every_year'                   => __('Repeat Every Year', 'wpamelia'),
            'special_day_date_warning'            => __('Please enter date', 'wpamelia'),
            'special_day_end_time_warning'        => __('Please enter end time', 'wpamelia'),
            'special_day_start_time_warning'      => __('Please enter start time', 'wpamelia'),
            'work_hours'                          => __('Work Hours', 'wpamelia'),
            'break_hours'                         => __('Break Hours', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the entities modal
     *
     * @return array
     */
    public static function getEntityFormStrings()
    {
        return [
            'visibility_hide' => __('Hide', 'wpamelia'),
            'visibility_show' => __('Show', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the location page
     *
     * @return array
     */
    public static function getLocationStrings()
    {
        return [
            'add_location'                   => __('Add Location', 'wpamelia'),
            'locations_search_placeholder'   => __('Search Locations...', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the service page
     *
     * @return array
     */
    public static function getServiceStrings()
    {
        return [
            'add_category'                       => __('Add Category', 'wpamelia'),
            'add_extra'                          => __('Add Extra', 'wpamelia'),
            'add_image'                          => __('Add Image', 'wpamelia'),
            'add_package'                        => __('Add Package', 'wpamelia'),
            'add_service'                        => __('Add Service', 'wpamelia'),
            'add_resource'                       => __('Add Resource', 'wpamelia'),
            'categories'                         => __('Categories', 'wpamelia'),
            'categories_positions_saved'         => __('Categories positions has been saved', 'wpamelia'),
            'category_deleted'                   => __('Category has been deleted', 'wpamelia'),
            'category_duplicated'                => __('Category has been duplicated', 'wpamelia'),
            'category_saved'                     => __('Category has been saved', 'wpamelia'),
            'click_add_category'                 => __('Start by clicking the Add Category button', 'wpamelia'),
            'click_add_package'                  => __('Start by clicking the Add Package button', 'wpamelia'),
            'click_add_resource'                 => __('Start by clicking the Add Resource button', 'wpamelia'),
            'click_add_service'                  => __('Start by clicking the Add Service button', 'wpamelia'),
            'confirm_delete_service'             => __('Are you sure you want to delete this service?', 'wpamelia'),
            'confirm_duplicate_service'          => __('Are you sure you want to duplicate this service?', 'wpamelia'),
            'confirm_global_change_service'      => __('You will change a setting which is also set for each employee separately. Do you want to update it for all employees?', 'wpamelia'),
            'confirm_hide_service'               => __('Are you sure you want to hide this service?', 'wpamelia'),
            'confirm_show_service'               => __('Are you sure you want to show this service?', 'wpamelia'),
            'delete_category_confirmation'       => __('Are you sure you want to delete this category', 'wpamelia'),
            'duration_and_pricing'               => __('Duration & Pricing ', 'wpamelia'),
            'edit_service'                       => __('Edit Service', 'wpamelia'),
            'gallery'                            => __('Gallery', 'wpamelia'),
            'hex'                                => __('Hex', 'wpamelia'),
            'maximum_capacity'                   => __('Maximum Capacity', 'wpamelia'),
            'maximum_capacity_tooltip'           => __('Here you can set the maximum number of people<br/>per one appointment.', 'wpamelia'),
            'minimum_capacity'                   => __('Minimum Capacity', 'wpamelia'),
            'minimum_capacity_tooltip'           => __('Here you can set the minimum number of people<br/>per one booking of this service.', 'wpamelia'),
            'new_category'                       => __('New Category', 'wpamelia'),
            'new_service'                        => __('New Service', 'wpamelia'),
            'price'                              => __('Price', 'wpamelia'),
            'select_service_duration_warning'    => __('Please select duration', 'wpamelia'),
            'service_buffer_time_after'          => __('Buffer Time After', 'wpamelia'),
            'service_buffer_time_after_tooltip'  => __('Time after the appointment (rest, clean up, etc.),<br/>when another booking for same service and<br/>employee cannot be made.', 'wpamelia'),
            'service_buffer_time_before'         => __('Buffer Time Before', 'wpamelia'),
            'service_buffer_time_before_tooltip' => __('Time needed to prepare for the appointment, when<br/>another booking for same service and employee<br/>cannot be made.', 'wpamelia'),
            'service_deleted'                    => __('Service has been deleted', 'wpamelia'),
            'service_hidden'                     => __('Service is hidden', 'wpamelia'),
            'service_saved'                      => __('Service has been saved', 'wpamelia'),
            'service_visible'                    => __('Service is visible', 'wpamelia'),
            'services_positions_saved'           => __('Services positions has been saved', 'wpamelia'),
            'services_positions_saved_fail'      => __('Unable to save services positions', 'wpamelia'),
            'services_sorting'                   => __('Sort Services:', 'wpamelia'),
            'services_sorting_custom'            => __('Custom', 'wpamelia'),
            'services_sorting_name_asc'          => __('Name Ascending', 'wpamelia'),
            'services_sorting_name_desc'         => __('Name Descending', 'wpamelia'),
            'services_sorting_price_asc'         => __('Price Ascending', 'wpamelia'),
            'services_sorting_price_desc'        => __('Price Descending', 'wpamelia'),
            'service_show_on_site'               => __('Show service on site', 'wpamelia'),
            'service_recurring_cycle'            => __('Set recurring appointment', 'wpamelia'),
            'service_recurring_cycle_tooltip'    => __('If this option is disabled, your customers won\'t be able to book recurring appointments at the same time.', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the user page
     *
     * @return array
     */
    public static function getUserStrings()
    {
        return [
            'create_new'               => __('Create New', 'wpamelia'),
            'email'                    => __('Email', 'wpamelia'),
            'enter_first_name_warning' => __('Please enter first name', 'wpamelia'),
            'enter_last_name_warning'  => __('Please enter last name', 'wpamelia'),
            'first_name'               => __('First Name', 'wpamelia'),
            'last_name'                => __('Last Name', 'wpamelia'),
            'female'                   => __('Female', 'wpamelia'),
            'male'                     => __('Male', 'wpamelia'),
            'notification_language'    => __('Notification Language', 'wpamelia'),
            'select_wp_user'           => __('Select or Create New', 'wpamelia'),
            'wp_user'                  => __('WordPress User', 'wpamelia'),
            'wp_user_customer_tooltip' => __('Here you can map a WordPress user to the customer if<br/>you want to give customers access to the list of their<br/>appointments in the back-end of the plugin.', 'wpamelia'),
            'wp_user_employee_tooltip' => __('Here you can map a WordPress user to the employee if<br/>you want to give employee access to the list of their<br/>appointments in the back-end of the plugin.', 'wpamelia'),
            'wp_customer_lang_tooltip' => __('This is the language in which the customer will receive notifications for bookings made on the admin/employee panel. It is preselected if the customer has booked on a page in the language available in Amelia notifications, or it can be set here.', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the employee page
     *
     * @return array
     */
    public static function getEmployeeStrings()
    {
        return [
            'assigned_services'                => __('Assigned Services', 'wpamelia'),
            'capacity'                         => __('Capacity', 'wpamelia'),
            'settings_employee'                => __('Provider Settings', 'wpamelia'),
            'employee_saved'                   => __('Employee has been saved', 'wpamelia'),
            'employee_panel_password'          => __('Employee Panel Password', 'wpamelia'),
            'period_services_filter'           => __('Applied for all assigned services', 'wpamelia'),
            'period_services_filter1_tooltip'  => __('Select only specific services for this period.<br/>If no services are selected, then all assigned services for this employee<br/>will be available for booking in this period.', 'wpamelia'),
            'price'                            => __('Price', 'wpamelia'),
            'special_days'                     => __('Special Days', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the customer page
     *
     * @return array
     */
    public static function getCustomerStrings()
    {
        return [
            'add_customer'                 => __('Add Customer', 'wpamelia'),
            'confirm_delete_customer'      => __('Are you sure you want to delete this customer?', 'wpamelia'),
            'customer_deleted'             => __('Customer has been deleted', 'wpamelia'),
            'customer_note'                => __('Note', 'wpamelia'),
            'customer_saved'               => __('Customer has been saved', 'wpamelia'),
            'customers'                    => __('Customers', 'wpamelia'),
            'customers_deleted'            => __('Customers have been deleted', 'wpamelia'),
            'customers_lower'              => __('customers', 'wpamelia'),
            'customers_search_placeholder' => __('Search Customers...', 'wpamelia'),
            'created_on'                   => __('Created On', 'wpamelia'),
            'date_of_birth'                => __('Date of Birth', 'wpamelia'),
            'edit_customer'                => __('Edit Customer', 'wpamelia'),
            'email_placeholder'            => __('example@mail.com', 'wpamelia'),
            'export_tooltip_customers'     => __('You can use this option to export customers in CSV file.', 'wpamelia'),
            'gender'                       => __('Gender', 'wpamelia'),
            'import_rules_desc'            => __('<ul><li>No first row with column names</li><li><b>First</b> and <b>Last name</b> are two separate fields</li><li><b>Date of birth</b> in the same format as chosen in your WP settings (if date format with a comma is used the dates should be in quotes)</li><li><b>Phone</b> has a country code</li><li><b>Gender</b> in Male or Female form</li></ul>', 'wpamelia'),
            'import_rules_req'             => __('Valid <b>First</b> and <b>Last name</b> are required fields. <br>If invalid, other values will be skipped and not imported.<br>If multiple customers have the same email address, only the first one will be imported.', 'wpamelia'),
            'import_successful_desc'       => __('customers have been imported successfully to your customer list', 'wpamelia'),
            'import_tooltip_customers'     => __('You can use this option to import customers from a CSV file.', 'wpamelia'),
            'imported_customers'           => __('Imported customers from file:', 'wpamelia'),
            'last_appointment'             => __('Last Appointment', 'wpamelia'),
            'last_appointment_ascending'   => __('Last Appointment Ascending', 'wpamelia'),
            'last_appointment_descending'  => __('Last Appointment Descending', 'wpamelia'),
            'new_customer'                 => __('New Customer', 'wpamelia'),
            'no_customers_yet'             => __('You don\'t have any customers here yet...', 'wpamelia'),
            'pending_appointments'         => __('Pending Appointments', 'wpamelia'),
            'required_data'                => __('Required fields are: <b>First Name</b> and <b>Last Name</b>.', 'wpamelia'),
            'select_date_of_birth'         => __('Select Date of Birth', 'wpamelia'),
            'total_appointments'           => __('Total Appointments', 'wpamelia'),
            'upload_csv'                   => __('Upload Customers .csv file', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the import dialog
     *
     * @return array
     */
    public static function getImportStrings()
    {
        return [
            'drag_drop'                    => __('Drag and drop or choose from <em>files</em>', 'wpamelia'),
            'import_customer_data'         => __('Import customer data', 'wpamelia'),
            'import_rules'                 => __('Import rules', 'wpamelia'),
            'import_successful'            => __('Import successful', 'wpamelia'),
            'map_data'                     => __('Please map corresponding data to columns.', 'wpamelia'),
            'wrong_format'                 => __('Some records have a wrong format', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the What's new page
     *
     * @return array
     */
    public static function getWhatsNewStrings()
    {
        return [
            'welcome_to_amelia'              => __('Welcome to wpAmelia', 'wpamelia'),
            'welcome_congratz'               => __('Congratulations! You are about to use the most powerful WordPress booking plugin - Amelia is designed to make the process of bookings representation and interaction quick, easy and effective.', 'wpamelia'),
            'discover_amelia'                => __('Discover Amelia', 'wpamelia'),
            'news_blog'                      => __('News Blog', 'wpamelia'),
            'keep_up_to_date'                => __('Keep up to date!', 'wpamelia'),
            'never_miss_notifications'       => __('Never miss notifications about new cool features, promotions, giveaways or freebies!', 'wpamelia'),
            'enter_your_email'               => __('Enter your email', 'wpamelia'),
            'subscribe'                      => __('Subscribe', 'wpamelia'),
            'take_a_look'                    => __('Take a look at how our clients use Amelia', 'wpamelia'),
            'read_success_stories'           => __('Read Success Stories', 'wpamelia'),
            'have_questions'                 => __('Have questions?', 'wpamelia'),
            'our_support_team'               => __('Our Support team will answer any of your questions', 'wpamelia'),
            'contact_our_support'            => __('Contact our support', 'wpamelia'),
            'amelia_features'                => __('Most used Premium features', 'wpamelia'),
            'online_payments'                => __('Online Payments', 'wpamelia'),
            'packages_services'              => __('Packages of services', 'wpamelia'),
            'google_sync'                    => __('Google Calendar Sync', 'wpamelia'),
            'zoom_meet'                      => __('Zoom/Google Meet', 'wpamelia'),
            'custom_service_duration'        => __('Custom Service Duration', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the lite vs premium page
     *
     * @return array
     */
    public static function getLiteVsPremiumStrings()
    {
        return [
            'amelia_plans_comparison'       => __('Amelia Plans Comparison', 'wpamelia'),
            'upgrade_to_premium'            => __('Upgrade to any of our three premium versions and unlock a world of exclusive features and benefits, tailored to enhance your experience and maximize the value you get from our product.', 'wpamelia'),
            'upgrade_now'                   => __('Upgrade now', 'wpamelia'),
            'lite_support_tooltip'          => __('Support is only available through forum', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the finance page
     *
     * @return array
     */
    public static function getFinanceStrings()
    {
        return [
            'amount'                             => __('Amount', 'wpamelia'),
            'booking_start'                      => __('Booking Start', 'wpamelia'),
            'coupons'                            => __('Coupons', 'wpamelia'),
            'customer_email'                     => __('Customer Email', 'wpamelia'),
            'employee_email'                     => __('Employee Email', 'wpamelia'),
            'export_tooltip_payments'            => __('You can use this option to export payments in CSV file<br/>for the selected date range.', 'wpamelia'),
            'method'                             => __('Method', 'wpamelia'),
            'new_coupon'                         => __('New Coupon', 'wpamelia'),
            'no_coupons_yet'                     => __('You don\'t have any coupons here yet', 'wpamelia'),
            'no_payments_yet'                    => __('You don\'t have any payments here yet', 'wpamelia'),
            'payment_date'                       => __('Payment date', 'wpamelia'),
            'payments'                           => __('Payments', 'wpamelia'),
            'payments_lower'                     => __('payments', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the finance page
     *
     * @return array
     */
    public static function getPaymentStrings()
    {
        return [
            'appointment_date'         => __('Appointment Date', 'wpamelia'),
            'appointment_info'         => __('Appointment Info', 'wpamelia'),
            'event_date'               => __('Event Date', 'wpamelia'),
            'confirm_delete_payment'   => __('Are you sure you want to delete this payment?', 'wpamelia'),
            'discount_amount'          => __('Discount', 'wpamelia'),
            'due'                      => __('Due', 'wpamelia'),
            'enter_new_payment_amount' => __('Enter new payment amount', 'wpamelia'),
            'finance'                  => __('Finance', 'wpamelia'),
            'payment_deleted'          => __('Payment has been deleted', 'wpamelia'),
            'payment_details'          => __('Payment Details', 'wpamelia'),
            'payment_saved'            => __('Payment has been saved', 'wpamelia'),
            'payments_deleted'         => __('Payments have been deleted', 'wpamelia'),
            'payment_type'             => __('Payment Type', 'wpamelia'),
            'service_price'            => __('Service Price', 'wpamelia'),
            'subtotal'                 => __('Subtotal', 'wpamelia'),
            'total_price'              => __('Total Price', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the appointment strings
     *
     * @return array
     */
    public static function getAppointmentStrings()
    {
        return [
            'appointment_deleted'               => __('Appointment has been deleted', 'wpamelia'),
            'appointment_saved'                 => __('Appointment has been saved', 'wpamelia'),
            'appointment_status_changed'        => __('Appointment status has been changed to ', 'wpamelia'),
            'appointments_deleted'              => __('Appointments have been deleted', 'wpamelia'),
            'appointments_search_placeholder'   => __('Search for Customers, Employees, Services...', 'wpamelia'),
            'assigned_to'                       => __('Assigned to', 'wpamelia'),
            'category'                          => __('Category', 'wpamelia'),
            'change_group_status'               => __('Change group status', 'wpamelia'),
            'confirm_delete_appointment'        => __('Are you sure you want to delete this appointment?', 'wpamelia'),
            'confirm_delete_appointment_plural' => __('Are you sure you want to delete these appointments?', 'wpamelia'),
            'confirm_duplicate_appointment'     => __('Are you sure you want to duplicate this appointment?', 'wpamelia'),
            'create_customer'                   => __('Create Customer', 'wpamelia'),
            'custom_fields'                     => __('Custom Fields', 'wpamelia'),
            'customer_email'                    => __('Customer Email', 'wpamelia'),
            'customers_singular_plural'         => __('Customer(s)', 'wpamelia'),
            'customers_tooltip'                 => __('Here you can define the number of people that are coming<br/>with this customer. The number you can choose depends<br/>on the service and employee capacity.', 'wpamelia'),
            'edit_payment_details'              => __('Edit Payment Details', 'wpamelia'),
            'edit_appointment'                  => __('Edit Appointment', 'wpamelia'),
            'end_time'                          => __('End Time', 'wpamelia'),
            'export_tooltip_appointments'       => __('You can use this option to export appointments in CSV file<br/>for the selected date range.', 'wpamelia'),
            'export_tooltip_attendees'          => __('You can use this option to export attendees in CSV file<br/>for the selected event.', 'wpamelia'),
            'new_appointment'                   => __('New Appointment', 'wpamelia'),
            'notify_attendees'                  => __('Notify the attendee(s)', 'wpamelia'),
            'notify_attendees_tooltip'          => __('Check this checkbox if you want your attendee(s) to<br/>receive an email about the event’s updated information.', 'wpamelia'),
            'notify_customers'                  => __('Notify the customer(s)', 'wpamelia'),
            'notify_customers_tooltip'          => __('Check this checkbox if you want your customer(s) to<br/>receive an email about the scheduled appointment.', 'wpamelia'),
            'schedule'                          => __('Schedule', 'wpamelia'),
            'select_customers'                  => __('Select Customer(s)', 'wpamelia'),
            'select_max_customer_count_warning' => __('Maximum number of places is', 'wpamelia'),
            'select_service'                    => __('Select Service', 'wpamelia'),
            'select_service_category'           => __('Select Service Category', 'wpamelia'),
            'selected_customers'                => __('Selected Customers', 'wpamelia'),
            'service_no_extras'                 => __('This service does not have any extras', 'wpamelia'),
            'start_time'                        => __('Start Time', 'wpamelia'),
            'time'                              => __('Time', 'wpamelia'),
            'time_slot_unavailable'             => __('Time slot is unavailable', 'wpamelia'),
            'booking_cancel_exception'          => __('Appointment can\'t be canceled', 'wpamelia'),
            'booking_reschedule_exception'      => __('Appointment can\'t be rescheduled', 'wpamelia'),
            'wc'                                => __('WooCommerce', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the bookable strings
     *
     * @return array
     */
    public static function getBookableStrings() {
        return [
            'deposit_enabled'                    => __('Deposit Payment', 'wpamelia'),
            'custom_pricing_enabled'             => __('Custom Pricing', 'wpamelia'),
            'custom_duration_pricing_enabled'    => __('Custom Duration and Pricing', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the event strings
     *
     * @return array
     */
    public static function getEventStrings()
    {
        return [
            'confirm_delete_attendee'     => __('Are you sure you want to delete selected attendee?', 'wpamelia'),
            'confirm_delete_attendees'    => __('Are you sure you want to delete selected attendees?', 'wpamelia'),
            'confirm_delete'              => __('Are you sure you want to delete this event?', 'wpamelia'),
            'confirm_duplicate_event'     => __('Are you sure you want to duplicate this event?', 'wpamelia'),
            'confirm_cancel'              => __('Are you sure you want to cancel this event?', 'wpamelia'),
            'confirm_open'                => __('Are you sure you want to open this event?', 'wpamelia'),
            'event_cancel_before_delete'  => __('Please cancel the event first before deleting it.', 'wpamelia'),
            'customize'                   => __('Customize', 'wpamelia'),
            'pricing'                     => __('Pricing', 'wpamelia'),
            'closed'                      => __('Closed', 'wpamelia'),
            'full'                        => __('Full', 'wpamelia'),
            'upcoming'                    => __('Upcoming', 'wpamelia'),
            'edit_event'                  => __('Edit Event', 'wpamelia'),
            'event_attendees'             => __('Attendees', 'wpamelia'),
            'event_add_attendee'          => __('Add Attendee', 'wpamelia'),
            'event_book_persons'          => __('Number of people', 'wpamelia'),
            'event_book_status'           => __('Status', 'wpamelia'),
            'event_book_tickets'          => __('Number of tickets', 'wpamelia'),
            'event_edit_attendee'         => __('Edit Attendee', 'wpamelia'),
            'event_aggregated_price'      => __('The price will multiply by the number of people/spots', 'wpamelia'),
            'event_attendee_saved'        => __('Attendee has been saved', 'wpamelia'),
            'event_attendee_remove'       => __('Remove Attendee', 'wpamelia'),
            'event_attendees_search'      => __('Find Attendees', 'wpamelia'),
            'event_attendee_deleted'      => __('Attendee have been deleted', 'wpamelia'),
            'event_attendees_deleted'     => __('Attendees have been deleted', 'wpamelia'),
            'event_book_more_than_once'   => __('Allow the same customer to book more than once', 'wpamelia'),
            'event_bringing_anyone'       => __('Allow bringing more people', 'wpamelia'),
            'event_cancel'                => __('Cancel Event', 'wpamelia'),
            'event_close_after_min'       => __('Close Event after certain minimum is reached', 'wpamelia'),
            'event_close_min_total'       => __('Minimum of attendees', 'wpamelia'),
            'event_close_min_bookings'    => __('Minimum of bookings', 'wpamelia'),
            'event_close_min_total_tt'    => __('One spot is equal to one attendee.', 'wpamelia'),
            'event_close_min_bookings_tt' => __('One booking can have multiple attendees/spots in it.', 'wpamelia'),
            'event_close_minimum'         => __('Set Minimum', 'wpamelia'),
            'event_custom_address'        => __('Custom Address', 'wpamelia'),
            'event_delete'                => __('Delete Event', 'wpamelia'),
            'event_deleted'               => __('Event has been deleted', 'wpamelia'),
            'event_duplicate'             => __('Duplicate Event', 'wpamelia'),
            'event_name'                  => __('Name:', 'wpamelia'),
            'event_booking_closes'        => __('Booking closes:', 'wpamelia'),
            'event_booking_opens'         => __('Booking opens:', 'wpamelia'),
            'event_booking_closes_on'     => __('Closes on:', 'wpamelia'),
            'event_booking_opens_on'      => __('Opens on:', 'wpamelia'),
            'event_booking_closes_after'  => __('Booking closes when event starts', 'wpamelia'),
            'event_booking_opens_now'     => __('Booking opens immediately', 'wpamelia'),
            'event_details'               => __('Details', 'wpamelia'),
            'event_period_time'           => __('Time:', 'wpamelia'),
            'event_open'                  => __('Open Event', 'wpamelia'),
            'event_recurring'             => __('Recurring:', 'wpamelia'),
            'event_recurring_enabled'     => __('This is a recurring event', 'wpamelia'),
            'event_opened'                => __('Event has been opened', 'wpamelia'),
            'event_canceled'              => __('Event has been canceled', 'wpamelia'),
            'event_saved'                 => __('Event has been saved', 'wpamelia'),
            'event_search_placeholder'    => __('Search Events...', 'wpamelia'),
            'event_max_capacity'          => __('Maximum allowed spots', 'wpamelia'),
            'event_select_address'        => __('Select Address', 'wpamelia'),
            'event_staff'                 => __('Staff', 'wpamelia'),
            'event_organizer'             => __('Organizer', 'wpamelia'),
            'event_organizer_tooltip'     => __('Here you can choose the employee that will be added as Organizer of the Google/Outlook Event. <br>Other employees chosen under the Staff option will be added as guests.', 'wpamelia'),
            'event_period_dates'          => __('Dates:', 'wpamelia'),
            'event_tags'                  => __('Tags', 'wpamelia'),
            'event_tags_select_or_create' => __('Select or Create Tag', 'wpamelia'),
            'enter_event_name'            => __('Enter Event Name', 'wpamelia'),
            'event_gallery'               => __('Event Gallery:', 'wpamelia'),
            'event_colors'                => __('Event Colors:', 'wpamelia'),
            'event_colors_preset'         => __('Preset Colors', 'wpamelia'),
            'event_colors_custom'         => __('Custom Color', 'wpamelia'),
            'event_show_on_site'          => __('Show event on site', 'wpamelia'),
            'event_status_changed'        => __('Booking status has been changed to ', 'wpamelia'),
            'no_attendees_yet'            => __('There are no attendees yet...', 'wpamelia'),
            'new_event'                   => __('New Event', 'wpamelia'),
            'price'                       => __('Price', 'wpamelia'),
            'time'                        => __('Time', 'wpamelia'),
            'maximum_capacity_reached'    => __('Maximum capacity is reached', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the calendar strings
     *
     * @return array
     */
    public static function getCalendarStrings()
    {
        return [
            'appointment_change_time'        => __('This will change the time of the appointment. Continue?', 'wpamelia'),
            'appointment_drag_past'          => __('Appointment can\'t be moved in past time period', 'wpamelia'),
            'appointment_rescheduled'        => __('Appointment has been rescheduled', 'wpamelia'),
            'calendar'                       => __('Calendar', 'wpamelia'),
            'confirm'                        => __('Confirm', 'wpamelia'),
            'total'                          => __('Total', 'wpamelia'),
        ];
    }

    /**
     * Returns the array for the Customize page
     *
     * @return array
     */
    public static function getCustomizeStrings()
    {
        return [
            'add_custom_field'                   => __('Add Custom Field', 'wpamelia'),
            'add_extra'                          => __('Add Extra', 'wpamelia'),
            'address'                            => __('Address', 'wpamelia'),
            'are_you_sure_reset_customize'       => __('Are you sure you want to reset your form settings?', 'wpamelia'),
            'current_changes_will_be_lost'       => __('Your current changes will be lost.', 'wpamelia'),
            'reset_yes'                          => __('Yes, Reset', 'wpamelia'),
            'reset_no'                           => __('No, Cancel', 'wpamelia'),
            'reset_form'                         => __('Reset Form', 'wpamelia'),
            'package_available'                  => __('Available in package', 'wpamelia'),
            'bringing_anyone_with_you'           => __('Bringing Anyone with You?', 'wpamelia'),
            'buttons'                            => __('Buttons', 'wpamelia'),
            'package_discount_text'              => __('Save', 'wpamelia'),
            'default_label'                      => __('Default Label', 'wpamelia'),
            'duration_colon'                     => __('Duration', 'wpamelia'),
            'checkbox'                           => __('Checkbox', 'wpamelia'),
            'click_add_custom_field'             => __('Start by clicking the Add Custom Field button', 'wpamelia'),
            'text_content'                       => __('Text Content', 'wpamelia'),
            'custom_fields'                      => __('Custom Fields', 'wpamelia'),
            'customize'                          => __('Customize', 'wpamelia'),
            'font'                               => __('Font', 'wpamelia'),
            'no_custom_fields_yet'               => __('You don\'t have any custom fields here yet...', 'wpamelia'),
            'options'                            => __('Options', 'wpamelia'),
            'pick_date_and_time'                 => __('Pick date & time', 'wpamelia'),
            'please_select_service'              => __('Please select service', 'wpamelia'),
            'primary_color'                      => __('Primary Color', 'wpamelia'),
            'success_color'                      => __('Success Color', 'wpamelia'),
            'warning_color'                      => __('Warning Color', 'wpamelia'),
            'error_color'                        => __('Error Color', 'wpamelia'),
            'radio'                              => __('Radio Buttons', 'wpamelia'),
            'reset'                              => __('Reset', 'wpamelia'),
            'select'                             => __('Selectbox', 'wpamelia'),
            'steps'                              => __('Steps', 'wpamelia'),
            'select_service'                     => __('Select Service', 'wpamelia'),
            'text'                               => __('Text', 'wpamelia'),
            'text-area'                          => __('Text Area', 'wpamelia'),
            'text_color'                         => __('Text Color', 'wpamelia'),
            'placeholder_color'                  => __('Placeholder Color', 'wpamelia'),
            'text_color_on_background'           => __('Text Color on Background', 'wpamelia'),
            'file'                               => __('Attachment', 'wpamelia'),
            'datepicker'                         => __('Date Picker', 'wpamelia'),
            'preview'                            => __('Preview', 'wpamelia'),
            'bgr_color'                          => __('Background Color', 'wpamelia'),
            'bgr_gradient_color1'                => __('Background Gradient Color 1', 'wpamelia'),
            'bgr_gradient_color2'                => __('Background Gradient Color 2', 'wpamelia'),
            'bgr_gradient_angle'                 => __('Background Gradient Angle', 'wpamelia'),
            'input_color'                        => __('Input Color', 'wpamelia'),
            'input_text_color'                   => __('Input Text Color', 'wpamelia'),
            'dropdown_color'                     => __('Dropdown Color', 'wpamelia'),
            'dropdown_text_color'                => __('Dropdown Text Color', 'wpamelia'),
            'image_color'                        => __('Image Color', 'wpamelia'),
            'recurring_active'                   => __('Repeat this appointment', 'wpamelia'),
            'first_name_colon'                   => __('First Name', 'wpamelia'),
            'last_name_colon'                    => __('Last Name', 'wpamelia'),
            'last_name_input_field'              => __('Last Name Input Field', 'wpamelia'),
            'email_colon'                        => __('Email', 'wpamelia'),
            'email_input_field'                  => __('Email Input Field', 'wpamelia'),
            'phone_colon'                        => __('Phone', 'wpamelia'),
            'phone_input_field'                  => __('Phone Input Field', 'wpamelia'),
            'go_back'                            => __('Go Back', 'wpamelia'),
            'service_name'                       => __('Service name', 'wpamelia'),
            'display_field'                      => __('Display Field:', 'wpamelia'),
            'mandatory_field'                    => __('Mandatory Field:', 'wpamelia'),
            'event_type'                         => __('Event Type', 'wpamelia'),
            'event_location'                     => __('Event Location', 'wpamelia'),
            'open'                               => __('Open', 'wpamelia'),
            'full'                               => __('Full', 'wpamelia'),
            'from'                               => __('From', 'wpamelia'),
            'upcoming'                           => __('Upcoming', 'wpamelia'),
            'event_free'                         => __('Free', 'wpamelia'),
            'event_price'                        => __('Event Price', 'wpamelia'),
            'service_badge'                      => __('Service Badge', 'wpamelia'),
            'service_price'                      => __('Service Price', 'wpamelia'),
            'package_name'                       => __('Package Name', 'wpamelia'),
            'congratulations'                    => __('Congratulations!', 'wpamelia'),
            'add_to_calendar'                    => __('Add to Calendar', 'wpamelia'),
            'finish_appointment'                 => __('Finish', 'wpamelia'),
            'form_type_step_by_step'             => __('Step By Step Booking Form', 'wpamelia'),
            'event_status'                       => __('Event Status', 'wpamelia'),
            'event_filters'                      => __('Filters', 'wpamelia'),
            'event_book_event'                   => __('Book event', 'wpamelia'),
            'form_block_service'                 => __('Service', 'wpamelia'),
            'form'                               => __('Form', 'wpamelia'),
            'form_flow'                          => __('Form Flow', 'wpamelia'),
            'use_global_colors'                  => __('Use Global Colors', 'wpamelia'),
            'service_selection'                  => __('Service Selection', 'wpamelia'),
            'service_colon'                      => __('Service', 'wpamelia'),
            'dropdown_category_heading'          => __('Category', 'wpamelia'),
            'dropdown_items_heading'             => __('Service', 'wpamelia'),
            'dropdown_empty'                     => __('No matching data', 'wpamelia'),

            'bringing_anyone'                    => __('Bringing Anyone With You', 'wpamelia'),
            'show_more'                          => __('Show more', 'wpamelia'),
            'show_less'                          => __('Show less', 'wpamelia'),

            'date_time'                          => __('Date & Time', 'wpamelia'),
            'date_time_slots_selected'           => __('All slots are selected', 'wpamelia'),
            'info_step'                          => __('Your Information', 'wpamelia'),
            'enter_first_name'                   => __('Enter first name', 'wpamelia'),
            'enter_first_name_warning'           => __('Please enter first name', 'wpamelia'),
            'enter_last_name'                    => __('Enter last name', 'wpamelia'),
            'enter_last_name_warning'            => __('Please enter last name', 'wpamelia'),
            'enter_email'                        => __('Enter email', 'wpamelia'),
            'enter_valid_email_warning'          => __('Please enter valid email', 'wpamelia'),
            'enter_phone'                        => __('Enter phone', 'wpamelia'),
            'enter_phone_warning'                => __('Please enter phone', 'wpamelia'),

            'payment_step'                       => __('Payment', 'wpamelia'),
            'summary'                            => __('Summary', 'wpamelia'),
            'summary_services'                   => __('Services', 'wpamelia'),
            'summary_services_subtotal'          => __('Service Subtotal', 'wpamelia'),
            'summary_persons'                    => __('people', 'wpamelia'),
            'subtotal'                           => __('Subtotal', 'wpamelia'),
            'total_amount_colon'                 => __('Total Amount', 'wpamelia'),
            'payment_onsite_sentence'            => __('The payment will be done on-site.', 'wpamelia'),
            'appointment_id'                     => __('Appointment ID', 'wpamelia'),
            'congrats_total_amount'              => __('Total Amount', 'wpamelia'),
            'congrats_payment'                   => __('Payment', 'wpamelia'),
            'your_name_colon'                    => __('Your Name', 'wpamelia'),
            'email_address_colon'                => __('Email Address', 'wpamelia'),
            'phone_number_colon'                 => __('Phone Number', 'wpamelia'),
            'congrats_date'                      => __('Date', 'wpamelia'),
            'congrats_time'                      => __('Local Time', 'wpamelia'),
            'congrats_service'                   => __('Service', 'wpamelia'),
            'congrats_employee'                  => __('Employee', 'wpamelia'),
            'congrats_location'                  => __('Location', 'wpamelia'),
            'choose_form'                        => __('Choose a Form', 'wpamelia'),
            'choose_form_for_customize'          => __('Choose a form you want to customize. The Step-by-Step 2.0 form is the new and improved version which provides you with better design and user experience, as well as better speed.', 'wpamelia'),
            'sbs_booking_form'                   => __('Step-by-Step Booking Form 2.0', 'wpamelia'),
            'sbs_booking_form_old'               => __('Booking Forms 1.0', 'wpamelia'),
            'redesigned_sbs_booking_form'        => __('Redesigned and upgraded Step-by-Step Booking form with a better user experience, animations, improved speed, and a stand-out design!', 'wpamelia'),
            'old_forms_text'                     => __('Step-by-Step 1.0 Booking, Catalog Booking, Search Booking, Event List and Event Calendar Bookings.', 'wpamelia'),
            'primary_and_state_colors'           => __('Primary and state colors', 'wpamelia'),
            'sidebar'                            => __('Sidebar', 'wpamelia'),
            'background_color'                   => __('Background Color', 'wpamelia'),
            'content'                            => __('Content', 'wpamelia'),
            'heading_text_color'                 => __('Heading Text Color', 'wpamelia'),
            'content_text_color'                 => __('Content Text Color', 'wpamelia'),
            'input_fields'                       => __('Input Fields', 'wpamelia'),
            'border_color'                       => __('Border Color', 'wpamelia'),
            'dropdowns'                          => __('Dropdowns', 'wpamelia'),
            'init_cell'                          => __('Init Cell', 'wpamelia'),
            'init_cell_text'                     => __('Init Cell Text', 'wpamelia'),
            'cell_selected_background'           => __('Cell Selected Background', 'wpamelia'),
            'cell_selected_text'                 => __('Cell Selected Text', 'wpamelia'),
            'cell_disabled_background'           => __('Cell Disabled Background', 'wpamelia'),
            'cell_disabled_text'                 => __('Cell Disabled Text', 'wpamelia'),
            'primary_background'                 => __('Primary Button Background Color', 'wpamelia'),
            'primary_text'                       => __('Primary Button Text Color', 'wpamelia'),
            'secondary_background'               => __('Secondary Button Background Color', 'wpamelia'),
            'secondary_text'                     => __('Secondary Button Text Color', 'wpamelia'),
            'layout_and_inputs'                  => __('Layout & Inputs', 'wpamelia'),
            'colors'                             => __('Colors', 'wpamelia'),
            'fonts'                              => __('Fonts', 'wpamelia'),
            'order'                              => __('Order', 'wpamelia'),
            'step_title'                         => __('Step Title', 'wpamelia'),
            'footer_buttons'                     => __('Footer Buttons', 'wpamelia'),
            'step_content'                       => __('Step Content', 'wpamelia'),
            'finish_btn_type'                    => __('Finish Button Type', 'wpamelia'),
            'panel_btn_type'                     => __('Panel Button Type', 'wpamelia'),
            'summary_segment'                    => __('Summary Segment', 'wpamelia'),
            'payment_segment'                    => __('Payment Segment', 'wpamelia'),
            'heading_title'                      => __('Heading Title', 'wpamelia'),
            'sub_steps'                          => __('Sub Steps', 'wpamelia'),

            /* csb - customize side bar */
            'csb_global_settings_content'        => __('Fonts and colors', 'wpamelia'),
            'csb_sidebar_content'                => __('Set up Sidebar visibility and its content', 'wpamelia'),
            'csb_services'                       => __('Service Selection', 'wpamelia'),
            'csb_services_content'               => __('Set up Services, Locations, Employees selection options', 'wpamelia'),
            'csb_date_time'                      => __('Date & Time Selection', 'wpamelia'),
            'csb_date_time_content'              => __('Set up Calendar layout and Recurring popup options', 'wpamelia'),
            'csb_info_step'                      => __('Customer Information', 'wpamelia'),
            'csb_info_step_content'              => __('Field order, mandatory fields, labels and display options', 'wpamelia'),
            'csb_payment'                        => __('Payment Summary', 'wpamelia'),
            'csb_payment_content'                => __('Set up labels and buttons', 'wpamelia'),
            'cpb_congratulations_content'        => __('Set up button types and labels', 'wpamelia'),

            'cb_global_settings_heading'         => __('Global Settings', 'wpamelia'),
            'cb_sidebar'                         => __('Sidebar', 'wpamelia'),
            'cb_section'                         => __('Section', 'wpamelia'),
            'cb_field_order_heading'             => __('Field Order', 'wpamelia'),
            'cb_congratulations_heading'         => __('Congratulations', 'wpamelia'),

            'sidebar_footer'                     => __('Footer', 'wpamelia'),
            'get_in_touch'                       => __('Get in Touch', 'wpamelia'),
            'collapse_menu'                      => __('Collapse Menu', 'wpamelia'),

            'sb_radio_filled'                    => __('Filled', 'wpamelia'),
            'sb_radio_plain'                     => __('Plain', 'wpamelia'),
            'sb_radio_text'                      => __('Text', 'wpamelia'),

            'continue_button_type'               => __('Continue Button Type', 'wpamelia'),
            'calendar_slot_end_time'             => __('Calendar Slot End Time', 'wpamelia'),
            'show_busy_slots'                    => __('Show Busy Time Slots', 'wpamelia'),
            'calendar_time_zone'                 => __('Calendar Time Zone', 'wpamelia'),
            'first_name'                         => __('First Name', 'wpamelia'),
            'last_name'                          => __('Last Name', 'wpamelia'),
            'email'                              => __('Email', 'wpamelia'),
            'phone'                              => __('Phone', 'wpamelia'),
            'finish_button_type'                 => __('Finish Button Type', 'wpamelia'),
            'panel_button_type'                  => __('Panel Button Type', 'wpamelia'),
            'sidebar_visibility'                 => __('Sidebar Visibility', 'wpamelia'),
            'publish_form'                       => __('Publish Form', 'wpamelia'),

            'view_all'                           => __('View All', 'wpamelia'),
            'csb_categories'                     => __('Categories', 'wpamelia'),
            'csb_categories_content'             => __('Set up categories cards', 'wpamelia'),
            'cards'                              => __('Cards', 'wpamelia'),
            'card_button_type'                   => __('Card Button Type', 'wpamelia'),
            'csb_category_services'              => __('Services Overview', 'wpamelia'),
            'csb_category_services_content'      => __('Set up Services view', 'wpamelia'),
            'csb_category_service'               => __('Service Details', 'wpamelia'),
            'csb_category_service_content'       => __('Set up Service detailed view', 'wpamelia'),
            'booking_form'                       => __('Booking Form', 'wpamelia'),
            'booking_form_content'               => __('Set options, colors and labels for booking form', 'wpamelia'),

            'cat_booking_form'                   => __('Catalog Booking Form 2.0', 'wpamelia'),
            'redesigned_cat_booking_form'        => __('Modernized Catalog Booking Form 2.0 with better user experience, improved speed, animation and a stand-out design!', 'wpamelia'),

            // cl - categories list
            'card_services_number'               => __('Total Number of Services', 'wpamelia'),
            'back_btn_heading'                   => __('Back Button', 'wpamelia'),
            'back_btn_type'                      => __('“Back” Button Type', 'wpamelia'),
            'back_btn'                           => __('Go Back', 'wpamelia'),
            'booking_btn_type'                   => __('“Book Now” Button Type', 'wpamelia'),

            // cl - category list
            'cl_btn'                             => __('Main Category Button', 'wpamelia'),
            'cl_side_color'                      => __('Category Card Side Color', 'wpamelia'),

            // cli - category items list
            // keys only used on backend customize
            'cil_filter_menu_btn'                => __('Filter Menu Button Type', 'wpamelia'),
            'cil_sidebar'                        => __('Categories Sidebar', 'wpamelia'),
            'cil_filter_block'                   => __('Filters Block', 'wpamelia'),
            'cil_side_menu_block'                => __('Categories Sidebar', 'wpamelia'),
            'cil_main_header'                    => __('Page Header', 'wpamelia'),
            'cil_main_content'                   => __('Main Content', 'wpamelia'),
            'service_category'                   => __('Service Category', 'wpamelia'),
            'service_duration'                   => __('Service Duration', 'wpamelia'),
            'service_about'                      => __('About Service', 'wpamelia'),
            'cil_filter_input'                   => __('“Search” option', 'wpamelia'),

            'filter_input'                       => __('Search', 'wpamelia'),
            'available'                          => __('Available', 'wpamelia'),
            'heading_service'                    => __('Service', 'wpamelia'),
            'heading_services'                   => __('Services', 'wpamelia'),
            'no_search_data'                     => __('No results', 'wpamelia'),
            'free'                               => __('Free', 'wpamelia'),
            'book_now'                           => __('Book Now', 'wpamelia'),
            'about_service'                      => __('About Service', 'wpamelia'),
            'view_all_photos'                    => __('View all photos', 'wpamelia'),

            'support_heading'                    => __('Support Heading:', 'wpamelia'),
            'company_phone'                      => __('Company Phone:', 'wpamelia'),
            'company_email'                      => __('Company Email:', 'wpamelia'),

            // elf - event list form
            'elf_booking_form'                   => __('Event List Booking Form 2.0', 'wpamelia'),
            'redesigned_elf_booking_form'        => __('Modernized Event List Booking Form 2.0 with better user experience, improved speed, animation and a stand-out design!', 'wpamelia'),

            'csb_events_list'                    => __('Events List', 'wpamelia'),
            'csb_events_list_content'            => __('Set up Location, Images, Filters, Capacity, Price, and Status visibility options', 'wpamelia'),
            'csb_event_info'                     => __('Event Info', 'wpamelia'),
            'csb_event_info_content'             => __('Set up Staff, Location, Gallery and other Event information visibility', 'wpamelia'),
            'csb_event_customer'                 => __('Customer Info', 'wpamelia'),
            'csb_event_customer_content'         => __('Field order, mandatory fields, labels and display options', 'wpamelia'),
            'csb_event_payment'                  => __('Payment', 'wpamelia'),
            'csb_event_payment_content'          => __('Set up labels and buttons', 'wpamelia'),
            'csb_event_congratulations'          => __('Congratulations', 'wpamelia'),
            'csb_event_congratulations_content'  => __('Set up button types and labels', 'wpamelia'),

            'events_available'                   => __('Events Available', 'wpamelia'),
            'event_available'                    => __('Event Available', 'wpamelia'),
            'event_page'                         => __('Page', 'wpamelia'),
            'event_search'                       => __('Search for Events', 'wpamelia'),
            'event_begins'                       => __('Begins', 'wpamelia'),
            'event_slot_left'                    => __('slot left', 'wpamelia'),
            'event_slots_left'                   => __('slots left', 'wpamelia'),
            'event_learn_more'                   => __('Learn more', 'wpamelia'),
            'event_read_more'                    => __('Read more', 'wpamelia'),
            'event_close'                        => __('Close', 'wpamelia'),
            'event_customer_info'                => __('Your Information', 'wpamelia'),
            'summary_event'                      => __('Event', 'wpamelia'),
            'event_id'                           => __('Event ID', 'wpamelia'),
            'about'                              => __('About', 'wpamelia'),
            'event_info'                         => __('Event Info', 'wpamelia'),
            'event_timetable'                    => __('Timetable', 'wpamelia'),
            'event_payment'                      => __('Payment', 'wpamelia'),
            'event_congrats'                     => __('Congratulations', 'wpamelia'),
            'event_about_list'                   => __('About Event', 'wpamelia'),
            'event_start'                        => __('Event Starts', 'wpamelia'),
            'event_end'                          => __('Event Ends', 'wpamelia'),
            'event_at'                           => __('at', 'wpamelia'),
            'event_bringing'                     => __('How many attendees do you want to book event for?', 'wpamelia'),

            // strings used only on backend
            'step_filters'                       => __('Step Filters', 'wpamelia'),
            'event_card'                         => __('Event Card', 'wpamelia'),
            'step_pagination'                    => __('Step Pagination', 'wpamelia'),
            'event_slots_capacity'               => __('Event Slots Capacity', 'wpamelia'),
            'filters_button_type'                => __('Filters Button Type', 'wpamelia'),
            'read_more_button_type'              => __('Read More Button Type', 'wpamelia'),
            'learn_more_button_type'             => __('Learn More Button Type', 'wpamelia'),
            'event_tab_img'                      => __('Event Tab Image', 'wpamelia'),
            'step_header'                        => __('Step Header', 'wpamelia'),
            'step_info_tab'                      => __('Step Info Tab', 'wpamelia'),
            'booking_event_btn'                  => __('Booking Event Button', 'wpamelia'),
            'finish_event_btn'                   => __('Finish Button', 'wpamelia'),
            'close_event_btn'                    => __('Close Event Button', 'wpamelia'),
            'event_gallery'                      => __('Event Gallery', 'wpamelia'),
            'event_description'                  => __('Event Description', 'wpamelia'),
        ];
    }

    /**
     * @return array
     */
    public static function getWordPressStrings()
    {
        return [
            'catalog'                          => __('Catalog', 'wpamelia'),
            'choose_category'                  => __('Choose Category', 'wpamelia'),
            'choose_service'                   => __('Choose Service', 'wpamelia'),
            'choose_package'                   => __('Choose Package', 'wpamelia'),
            'filter'                           => __('Preselect Booking Parameters', 'wpamelia'),
            'skip_categories'                  => __('Skip Categories step', 'wpamelia'),
            'insert_amelia_shortcode'          => __('Insert Amelia Booking Shortcode', 'wpamelia'),
            'select_catalog_view'              => __('Select Catalog View', 'wpamelia'),
            'select_category'                  => __('Select Category', 'wpamelia'),
            'select_employee'                  => __('Select Employee', 'wpamelia'),
            'select_location'                  => __('Select Location', 'wpamelia'),
            'select_package'                   => __('Select Package', 'wpamelia'),
            'select_service'                   => __('Select Service', 'wpamelia'),
            'select_event'                     => __('Select Event', 'wpamelia'),
            'select_tag'                       => __('Select Tag', 'wpamelia'),
            'select_view'                      => __('Select View', 'wpamelia'),
            'show'                             => __('Show', 'wpamelia'),
            'show_all'                         => __('Show All', 'wpamelia'),
            'manually_loading'                 => __('Load booking form manually', 'wpamelia'),
            'manually_loading_description'     => __('Add element (button, link...) ID, that will manually load amelia shortcode content', 'wpamelia'),
            'show_all_categories'              => __('Show all categories', 'wpamelia'),
            'show_all_employees'               => __('Show all employees', 'wpamelia'),
            'show_all_locations'               => __('Show all locations', 'wpamelia'),
            'show_all_services'                => __('Show all services', 'wpamelia'),
            'show_all_events'                  => __('Show all events', 'wpamelia'),
            'show_all_packages'                => __('Show all packages', 'wpamelia'),
            'show_all_tags'                    => __('Show all tags', 'wpamelia'),
            'show_catalog'                     => __('Show catalog of all categories', 'wpamelia'),
            'show_category'                    => __('Show specific category', 'wpamelia'),
            'show_categories'                  => __('Show specific categories', 'wpamelia'),
            'show_package'                     => __('Show specific package', 'wpamelia'),
            'show_packages'                    => __('Show specific packages', 'wpamelia'),
            'show_event'                       => __('Show event', 'wpamelia'),
            'show_event_view_type'             => __('Show Type', 'wpamelia'),
            'show_event_view_list'             => __('List (default)', 'wpamelia'),
            'show_event_view_calendar'         => __('Calendar', 'wpamelia'),
            'show_tag'                         => __('Show tag', 'wpamelia'),
            'show_service'                     => __('Show specific service', 'wpamelia'),
            'show_services'                    => __('Show specific services', 'wpamelia'),
            'trigger_type'                     => __('Trigger type', 'wpamelia'),
            'trigger_type_id'                  => __('Id', 'wpamelia'),
            'trigger_type_class'               => __('Class', 'wpamelia'),
            'trigger_type_tooltip'             => __('Trigger by attribute', 'wpamelia'),
            'step_booking'                     => __('Step Booking', 'wpamelia'),
            'catalog_booking'                  => __('Catalog Booking', 'wpamelia'),
            'events_list_booking'              => __('Events List Booking', 'wpamelia'),
            'recurring_event'                  => __('Show recurring events', 'wpamelia'),
            'in_dialog'                        => __('Show in Amelia Popup', 'wpamelia'),

            'booking_divi'                     => __('AM - Booking view', 'wpamelia'),
            'step_booking_divi'                => __('AM - Step Booking', 'wpamelia'),
            'catalog_booking_divi'             => __('AM - Catalog Booking', 'wpamelia'),
            'catalog_divi'                     => __('AM - Catalog view', 'wpamelia'),
            'events_divi'                      => __('AM - Events view', 'wpamelia'),
            'events_list_booking_divi'         => __('AM - Events List Booking', 'wpamelia'),
            'booking_gutenberg_block'          => [
                'title'       => __('Amelia - Booking view', 'wpamelia'),
                'description' => __('Step-By-Step Booking Wizard gives your customers the option to choose everything about the booking in a few steps', 'wpamelia'),
            ],
            'step_booking_gutenberg_block'          => [
                'title'       => __('Amelia - Step-By-Step Booking', 'wpamelia'),
                'description' => __('Step-by-Step booking view guides the customers through several steps in order to make their bookings.', 'wpamelia'),
            ],
            'catalog_booking_gutenberg_block'          => [
                'title'       => __('Amelia - Catalog Booking', 'wpamelia'),
                'description' => __('Front-end Booking Catalog is shortcode when you want to show your service in a form of a catalog', 'wpamelia'),
            ],
            'catalog_gutenberg_block'          => [
                'title'       => __('Amelia - Catalog view', 'wpamelia'),
                'description' => __('Front-end Booking Catalog is shortcode when you want to show your service in a form of a cataloge', 'wpamelia'),
            ],
            'events_gutenberg_block'           => [
                'title'       => __('Amelia - Events', 'wpamelia'),
                'description' => __('Event Booking is shortcode that gives your customers the option to book one of the events that you\'ve created on the back-end in a simple event list view.', 'wpamelia'),
            ],
            'events_list_booking_gutenberg_block'           => [
                'title'       => __('Amelia - Events List', 'wpamelia'),
                'description' => __('Event Booking is shortcode that gives your customers the option to book one of the events that you\'ve created on the back-end in a simple event list view.', 'wpamelia'),
            ],
        ];
    }

    /**
     * @return array
     */
    public static function getBuddyBossStrings()
    {
        return [
        ];
    }

    /**
     * @return array
     */
    public static function getRecurringStrings()
    {
        return [
            'recurring_appointments'   => __('Recurring Appointments', 'wpamelia'),
        ];
    }
}
