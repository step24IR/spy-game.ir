<?php /* Template Name: تماس با ما
Template Post Type: post,page,download,product */
?>

<?php

/* response strings */
$missing_fields = 'لطفا همه موارد را پر کنید.';
$email_invalid = 'نشانی ایمیل شما نامعتبر است.';
$trapped = 'لطفا از طریق اسکریپت به این صفحه دسترسی ندهید.';
$error = 'پیام ارسال نشد.';
$success = 'با تشکر! پیام ارسال شد.';

/* process post vars, leave honeypot raw */
$submitted = sanitize_text_field($_POST['scf_submitted']);
$name = sanitize_text_field($_POST['scf_name']);
$email = sanitize_text_field($_POST['scf_email']);
$message = sanitize_text_field($_POST['scf_message']);
$honeypot = $_POST['scf_message2'];

/* wp_mail vars */
$mailto = get_option('admin_email');
$subject = 'Nachricht von  ' . get_bloginfo('name');
$headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n";

if ($submitted) {
    if ($honeypot != "") {
        scf_response("alert-danger", $trapped);
    } else {
        if (!$name || !$email || !$message) {
            $alert[] = $missing_fields;
        }
        if (!is_email($email) && $email) {
            $alert[] = $email_invalid;
        }
        if (empty($alert)) {
            if (wp_mail($mailto, $subject, strip_tags($message), $headers)) {
                $alert[] = $success;
                scf_response("alert-success", $alert);
                unset($submitted, $name, $email, $message, $honeypot);
            } else {
                $alert[] = $error;
                scf_response("alert-danger", $alert);
            }
        } else {
            scf_response("alert-warning", $alert);
        }
    }
}

/* output alert html */
function scf_response($class, $alertArr)
{
    $alertStr = implode('<br>', $alertArr);
    echo '<div class="alert ' . $class . '">' . $alertStr . '</div>';
}

?>
<!--
این کد بین تکست اریا هست یادت نره
<?php //echo $message; ?>
-->
<?php get_header(); ?>
<section id="contact" class="body-contact-form ">
    <div class="contact-box d-flex flex-wrap ">
        <div class="contact-links col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <h2 class="h2-form-contact">تماس با ما</h2>
            <div class="mt-5">
                <i class="fas fa-building icon-contact mx-2"></i>
                <span class="text-link-contact">تیم نرم افزاری ویراد</span>
            </div>
            <div class="links">
                <div class="link">
                    <a class="icon-contact-link" href="tel:+989358668218">
                        <div class="icon-contact-form">
                            <i class="fas fa-phone-volume icon-social-contact"></i>
                        </div>
                    </a>
                </div>
                <div class="link">
                    <a class="icon-contact-link" href="https://instagram.com/spy-game.ir">
                        <div class="icon-contact-form">
                            <i class="fab fa-instagram icon-social-contact"></i>
                        </div>
                    </a>
                </div>
                <div class="link">
                    <a class="icon-contact-link" href="https://wa.me/989358668218">
                        <div class="icon-contact-form">
                            <i class="fab fa-whatsapp icon-social-contact"></i>
                        </div>
                    </a>
                </div>
                <div class="link">
                    <a class="icon-contact-link" href="https://t.me/mrrobot_98">
                        <div class="icon-contact-form">
                            <i class="fab fa-telegram icon-social-contact"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="d-flex my-4">
                    <i class="fas fa-map-marked-alt icon-contact mx-2"></i>
                    <span class="text-link-contact">
                        نشانی:
                    </span>
                    <p class="text-link-contact">
                        مشهد - بلوار فکوری - بین فکوری 9 و 11 - درمانگاه شبانه روزی - طبقه سوم
                    </p>
                </div>
                <div>
                    <i class="fas fa-phone-square-alt icon-contact mx-2"></i>
                    <a href="tel:+051-38928607" class="text-link-contact">+051-38928607</a>
                </div>
            </div>
        </div>
        <div class="contact-form-wrapper col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <form role="form" action="<?php the_permalink(); ?>" method="post">
                <div class="form-item">
                    <input
                            class="input-contact-form"
                            type="text"
                            value="<?php echo $name; ?>"
                            id="scf_name" name="scf_name"
                            required
                    />
                    <label class="label-contact-form">نام:</label>
                </div>
                <div class="form-item">
                    <input
                            class="input-contact-form"
                            type="text"
                            id="scf_email" name="scf_email"
                            value="<?php echo $email; ?>"
                            required
                    />
                    <label class="label-contact-form">ایمیل:</label>
                </div>
                <div class="form-item">
              <textarea
                      class="text-area-contact-form"
                      id="scf_message" name="scf_message"
                      required
              ></textarea>
                    <label class="label-contact-form">پیام:</label>
                </div>
                <div class="form-group" style="display:none;">
                    <label for="scf_message2">پیام دوم</label>
                    <input type="text" name="scf_message2" name="scf_message2">
                </div>
                <input type="hidden" name="scf_submitted" value="1">
                <button type="submit" class="submit-btn">ارسال</button>
            </form>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<!--    <form role="form" action="--><?php //the_permalink(); ?><!--" method="post">-->
<!--        <div class="form-group">-->
<!--            <label for="scf_name">Name</label>-->
<!---->
<!--            <input-->
<!--                    type="text"-->
<!--                    id="scf_name" name="scf_name"-->
<!--                    value="--><?php //echo $name; ?><!--"-->
<!--                    class="form-control"-->
<!--                    placeholder="Ihr Name">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="scf_email">E-Mail</label>-->
<!--            <input-->
<!--                    type="text"-->
<!--                    id="scf_email" name="scf_email"-->
<!--                    value="--><?php //echo $email; ?><!--"-->
<!--                    class="form-control"-->
<!--                    placeholder="Ihre E-Mail-Adresse">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="scf_message">Nachricht</label>-->
<!--            <textarea-->
<!--                    rows="4"-->
<!--                    id="scf_message" name="scf_message"-->
<!--                    class="form-control"-->
<!--                    placeholder="Ihre Nachricht">--><?php //echo $message; ?><!--</textarea>-->
<!--        </div>-->
<!--        <div class="form-group" style="display:none;">-->
<!--            <label for="scf_message2">Nachricht2</label>-->
<!--            <input type="text" name="scf_message2" name="scf_message2">-->
<!--        </div>-->
<!--        <input type="hidden" name="scf_submitted" value="1">-->
<!--        <button type="submit" class="btn btn-primary">Nachricht senden</button>-->
<!--    </form>-->