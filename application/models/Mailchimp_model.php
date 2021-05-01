<?php
    
class Mailchimp_mandrill{
    
    private $api_key = '';

    private $to = [];
    private $template = '';
    private $html = '';
    private $subject = '';
    private $from_email = '';
    private $from_name = '';
    private $headers = [];

    private $important = false;
    private $track_opens = null;
    private $track_clicks = null;
    private $auto_text = null;
    private $auto_html = null;
    private $inline_css = null;
    private $url_strip_qs = null;
    private $preserve_recipients = null;
    private $view_content_link = null;
    private $bcc_address = '';
    private $tracking_domain = null;
    private $signing_domain = null;
    private $return_path_domain = null;
    private $merge = true;
    private $merge_language = 'mailchimp';
    private $global_merge_vars = [];
    private $merge_vars = [];
    private $tags = [];
    private $subaccount = 'customer-123';
    private $google_analytics_domains = [];
    private $google_analytics_campaign = '';
    private $metadata = [];
    private $recipient_metadata = [];
    private $attachments = [];
    private $images = [];

    private $async = false;
    private $ip_pool = 'Main Pool';
    private $send_at = 'example send_at';

    private $result = null;

    public function __construct()
    {
        //Class has been invoked
    }


    public function send()
    {
        try {

            $mandrill = new Mandrill('YOUR_API_KEY');
            $message = array(
                'html' => $this->html,
                'text' => $this->text,
                'subject' => $this->subject,
                'from_email' => $this->from_email,
                'from_name' => $this->from_name,
                'to' => $this->to,
                'headers' => $this->headers,
                'important' => $this->important,
                'track_opens' => $this->track_opens,
                'track_clicks' => $this->track_clicks,
                'auto_text' => $this->auto_text,
                'auto_html' => $this->auto_html,
                'inline_css' => $this->inline_css,
                'url_strip_qs' => $this->url_strip_qs,
                'preserve_recipients' => $this->preserve_recipients,
                'view_content_link' => $this->view_content_link,
                'bcc_address' => $this->bcc_address,
                'tracking_domain' => $this->tracking_domain,
                'signing_domain' => $this->signing_domain,
                'return_path_domain' => $this->return_path_domain,
                'merge' => $this->merge,
                'merge_language' => $this->merge_language,
                'global_merge_vars' => $this->global_merge_vars,
                'merge_vars' => $this->merge_vars,
                'tags' => $this->tags,
                'subaccount' => $this->subaccount,
                'google_analytics_domains' => $this->google_analytics_domains,
                'google_analytics_campaign' => $this->google_analytics_campaign,
                'metadata' => $this->metadata,
                'recipient_metadata' => $this->recipient_metadata,
                'attachments' => $this->attachments,
                'images' => $this->images
            );
            $async = $this->async;
            $ip_pool = $this->ip_pool;
            $send_at = $this->send_at;
            $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
            print_r($result);
            /*
            Array
            (
                [0] => Array
                    (
                        [email] => recipient.email@example.com
                        [status] => sent
                        [reject_reason] => hard-bounce
                        [_id] => abc123abc123abc123abc123abc123
                    )
            
            )
            */
        } catch(Mandrill_Error $e) {
            // Mandrill errors are thrown as exceptions
            echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
            // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
            throw $e;
        }
    }
}

?>