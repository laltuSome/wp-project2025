<?php
/**
 * Plugin Name: Custom AJAX Contact Form
 * Description: A simple contact form with AJAX submission and multiple recipients.
 * Version: 1.0
 * Author: Laltu Some
 */

// AJAX Handler
add_action('wp_ajax_custom_ajax_form', 'cac_custom_ajax_form_handler');
add_action('wp_ajax_nopriv_custom_ajax_form', 'cac_custom_ajax_form_handler');

function cac_custom_ajax_form_handler() {
    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $date    = sanitize_text_field($_POST['date'] ?? '');
    $message = sanitize_textarea_field($_POST['mess'] ?? '');

    if (empty($name) || empty($email)) {
        wp_send_json_error(['msg' => 'Name and Email are required.']);
    }

    if (!is_email($email)) {
        wp_send_json_error(['msg' => 'Please enter a valid email address.']);
    }

    $to = 'huldlaird@gmail.com, badrinathsinha38@gmail.com, laltu.partho@gmail.com';
    $subject = "Message from $name";
    $body  = "Name: $name\nEmail: $email\nPhone: $phone\nDate: $date\n\nMessage:\n$message";
    $headers = [
        'From: huldlaird@gmail.com',
        'Reply-To: ' . $email,
        'Content-Type: text/plain; charset=UTF-8'
    ];

    if (wp_mail($to, $subject, $body, $headers)) {
        wp_send_json_success(['msg' => 'Thank you! Your message has been sent successfully.']);
    } else {
        wp_send_json_error(['msg' => 'Email sending failed. Please try again later.']);
    }
}

// Shortcode
add_shortcode('ajax_contact_form', function() {
    ob_start(); ?>
    <form id="ajaxContactForm">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="form-label" for="name">Name<span style="color:red">*</span></label>
                    <input type="text" class="form-input" name="name" id="name" required>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="form-label" for="email">Email<span style="color:red">*</span></label>
                    <input type="email" class="form-input" name="email" id="email" required>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="tel" class="form-input" name="phone" id="phone">
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label class="form-label" for="date">Check availability</label>
                    <input type="date" class="form-input" name="date" id="date">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group">
                    <label class="form-label" for="mess">Comment</label>
                    <textarea class="form-input" name="mess" id="mess" rows="4"></textarea>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-12">
                <div class="form-group text-center">
                    <button type="submit" name="send" id="formSubmitBtn">Send</button>
                </div>
            </div>

        </div>
    </form>
    <div id="formResult" style="margin-top:10px;"></div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('ajaxContactForm');
        const resultBox = document.getElementById('formResult');
        const submitBtn = document.getElementById('formSubmitBtn');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            resultBox.innerHTML = '<p style="color:#0073aa;">Sending...</p>';
            submitBtn.disabled = true;

            const formData = new FormData(form);
            formData.append('action', 'custom_ajax_form');

            fetch('<?php echo esc_url(admin_url("admin-ajax.php")); ?>', {
                method: 'POST',
                body: formData
            })
            .then(r => r.json())
            .then(data => {
                if (data.success) {
                    resultBox.innerHTML = '<p style="color:green;">' + data.data.msg + '</p>';
                    form.reset();
                } else {
                    resultBox.innerHTML = '<p style="color:red;">' + (data.data ? data.data.msg : 'Failed.') + '</p>';
                }
                submitBtn.disabled = false;
            })
            .catch(() => {
                resultBox.innerHTML = '<p style="color:red;">Server error. Please try again later.</p>';
                submitBtn.disabled = false;
            });
        });
    });
    </script>
    <?php
    return ob_get_clean();
});
