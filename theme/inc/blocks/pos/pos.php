<?php
    // Create id attribute allowing for custom "anchor" value.
    $id = 'ccc26_block-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'ccc26_block';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }

    // Variables
    $b1TitleOne = get_field('b1_title_part_one');
    $b1TitleTwo = get_field('b1_title_part_two');
    $b1Content = get_field('b1_content');
    $b1SocialLabel = get_field('b1_social_handle_label');
    $b1SocialLink = get_field('b1_social_handle_link');

    $b2TitleOne = get_field('b2_title_part_one');
    $b2TitleTwo = get_field('b2_title_part_two');
    $b2Content = get_field('b2_content');
    $b2Form = get_field('form_code');

?>

<section 
    id="<?php echo esc_attr($id); ?>" 
    class="<?php echo esc_attr($className); ?> ccc26_pos"     
>
   <div class="ccc26_wrap ccc26_pos-columns">
        <div class="ccc26_pos-column ccc26_background-pink">
            <div class="ccc26_pos-column-wrap">
                <h2>
                    <?php if( $b1TitleOne): ?>
                        <span><?php echo $b1TitleOne; ?></span><br />
                    <?php endif; ?>
                    <?php if( $b1TitleTwo ): ?>
                        <em><?php echo $b1TitleTwo; ?></em>
                    <?php endif; ?>
                </h2>
            </div>
            <div class="ccc26_pos-column-content">
                <?php echo $b1Content; ?>
                <p><a href="<?php echo $b1SocialLink; ?>" target="_blank" rel="noopener noreferrer"><?php echo $b1SocialLabel; ?></a></p>
            </div>
            <?php if(get_field('add_social_media')): ?>
                <?php get_template_part( 'inc/social', 'list' ); ?>
            <?php endif; ?>
        </div>
        <div class="ccc26_pos-column ccc26_background-deep-blue">
            <div class="ccc26_pos-column-wrap">
                <h2>
                    <?php if($b2TitleOne): ?>
                        <span><?php echo $b2TitleOne; ?></span><br />
                    <?php endif; ?>
                    <?php if($b2TitleTwo): ?>
                        <em><?php echo $b2TitleTwo; ?></em>
                    <?php endif; ?>
                </h2>
            </div>
            <div class="ccc26_pos-column-content">
                <?php echo $b2Content; ?>

                <?php if($b2Form): ?>
                    <script>
                            (function(w, d, t, h, s, n) {
                                w.FlodeskObject = n;
                                var fn = function() {
                                (w[n].q = w[n].q || []).push(arguments);
                                };
                                w[n] = w[n] || fn;
                                var f = d.getElementsByTagName(t)[0];
                                var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
                                var sm = d.createElement(t);
                                sm.async = true;
                                sm.type = 'module';
                                sm.src = h + s + '.mjs' + v;
                                f.parentNode.insertBefore(sm, f);
                                var sn = d.createElement(t);
                                sn.async = true;
                                sn.noModule = true;
                                sn.src = h + s + '.js' + v;
                                f.parentNode.insertBefore(sn, f);
                            })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
                        </script>
                        <script>
                            window.fd('form:handle', {
                                formId: '69c53b986c0e12d1f419b390',
                                rootEl: '.ff-69c53b986c0e12d1f419b390',
                            });
                        </script>
                    <div class="ccc26_pos-form">
                        <?php //echo do_shortcode($b2Form); ?>
                        <div class="ff-69c53b986c0e12d1f419b390" data-ff-el="root" data-ff-version="3" data-ff-type="inline" data-ff-name="inlineNoImage" data-ff-stage="default">
                            <!--tpl {% block config %} tpl-->
                            <div data-ff-el="config" data-ff-config="eyJ0cmlnZ2VyIjp7Im1vZGUiOiJpbW1lZGlhdGVseSIsInZhbHVlIjowfSwib25TdWNjZXNzIjp7Im1vZGUiOiJtZXNzYWdlIiwibWVzc2FnZSI6IiIsInJlZGlyZWN0VXJsIjoiIn0sImNvaSI6ZmFsc2UsInNob3dGb3JSZXR1cm5WaXNpdG9ycyI6dHJ1ZSwibm90aWZpY2F0aW9uIjp0cnVlLCJnZHByIjp7ImFjY2VwdHNNYXJrZXRpbmciOmZhbHNlLCJwcml2YWN5UG9saWN5Ijp7ImVuYWJsZWQiOmZhbHNlLCJtYW5kYXRvcnkiOmZhbHNlfX0sInRyYWNraW5nQ29uZmlnIjp7Im1ldGFQaXhlbElkIjoiIiwiY29va2llQmFubmVyRW5hYmxlZCI6ZmFsc2UsImdvb2dsZUFuYWx5dGljc0lkIjoiIn19" style="display: none"></div>
                            <!--tpl {% endblock %} tpl-->
                            <div class="ff-69c53b986c0e12d1f419b390__container">
                                <div class="ff-69c53b986c0e12d1f419b390__wrapper">
                                    <form class="ff-69c53b986c0e12d1f419b390__form" action="https://form.flodesk.com/forms/69c53b986c0e12d1f419b390/submit" method="post" data-ff-el="form">
                                        <div class="ff-69c53b986c0e12d1f419b390__content fd-form-content" data-ff-el="content">
                                            <div class="ff-69c53b986c0e12d1f419b390__fields" data-ff-el="fields">
                                                <!--tpl {% block fields %} tpl-->
                                                <div class="ff-69c53b986c0e12d1f419b390__field fd-form-group">
                                                    <input id="ff-69c53b986c0e12d1f419b390-email" class="ff-69c53b986c0e12d1f419b390__control fd-form-control" type="text" maxlength="255" name="email" placeholder="Email address" data-ff-tab="email::submit" required />
                                                    <label for="ff-69c53b986c0e12d1f419b390-email" class="ff-69c53b986c0e12d1f419b390__label fd-form-label">
                                                        <div>
                                                            <div>Email address</div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <input type="text" maxlength="255" name="confirm_email_address" style="display: none" />
                                                <!--tpl {% endblock %} tpl-->
                                            </div>

                                            <div class="ff-69c53b986c0e12d1f419b390__footer" data-ff-el="footer">
                                                <button type="submit" class="ff-69c53b986c0e12d1f419b390__button fd-btn" data-ff-el="submit" data-ff-tab="submit">
                                                    <div><span data-draw-element="editable">Subscribe</span></div>
                                                </button>
                                            </div>

                                            <!--tpl {% if var.Config.Gdpr.PrivacyPolicy.Enabled and var.Config.Gdpr.AcceptsMarketing == false and var.Config.Gdpr.PrivacyPolicy.Mandatory == false %} tpl-->

                                            <!--tpl {% endif %} tpl-->

                                        </div>
                                        <div class="ff-69c53b986c0e12d1f419b390__success fd-form-success" data-ff-el="success">
                                            <div class="ff-69c53b986c0e12d1f419b390__success-message">
                                                <div>
                                                    <div>
                                                        <div data-paragraph="true">Thank you for subscribing!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ff-69c53b986c0e12d1f419b390__error fd-form-error" data-ff-el="error"></div>
                                    </form>
                                </div>
                            </div>
                        </div>                        
                    </div>
                <?php endif; ?>
            </div>            
        </div>
    </div>
</section>