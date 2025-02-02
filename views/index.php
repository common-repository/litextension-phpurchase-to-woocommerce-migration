<div class="wrap no-js">
    <h2>LitExtension: <?php echo $source_cart; ?> to Woocommerce Migration</h2>
    <div class="content">
        <div class="litextension">
            <div id = "messages"></div>
            <div class="litextension_topdesc">
                <a class="litextension_logo" href="<?php echo $product_link; ?>" target="_blank">
                    <img  alt="Automated shopping cart migration service" title="Automated shopping cart migration service" src="<?php echo pwm_url('img/logo.jpg'); ?>">
                </a>
                <div class="litextension_text">
                    <div class="lit-title"><?php echo $source_cart ?> to Woocommerce Migration</div>
                    <?php echo $source_cart; ?> to Woocommerce Migration Plugin is ultimate Shopping Cart Migration Solution by LitExtension.
                    It allows you to migrate all your products, categories, orders, customers, passwords, SEO URLs and other data from <?php echo $source_cart; ?> to Woocommerce within 3 simple steps.
                    <div class="lit-btn-submit"style="margin-top: 15px"><a target="_blank" href="<?php echo $product_link; ?>"  target="_blank"><button class="submit_button" style="padding: 10px 30px!important">Get It Now</button></a></div>
                </div>
            </div>
            <div class="tabs_content">
                <p>To get the best advices on how to migrate your data for totally free of charge. Please enter the following information, our experts will get back to you within 6 hours.</p>
                <form action="http://litextension.com/zendesk/lite/save" method="post" enctype="multipart/form-data" id="form">
                    <div id="lit_register_content">
                        <div class="left-col"><span style="padding-bottom: 5px">Your Fullname</span><br/>
                            <input type="text" size="30" name = "requester_name" required id = "registerName" ><br/>
                            <span style="padding-bottom: 5px">Your Email</span><br/>
                            <input type="text" size="30" name = "requester" required id = "registerEmail">

                        </div>
                        <div class="right-col">Please let us know your requirement<br/>
                            <textarea name = "description" id = "registerRequirement" style='width: 500px;height: 100px'> </textarea></div>
                        <br/>
                        <input type="hidden" name = "sourceCartName" value="<?php echo $source_cart; ?>">
                        <input type="hidden" name = "targetCartName" value="Opencart">
                        <div class="lit-btn-submit"><button class="submit_button" id='submitRegisterForm'>Submit</button></div>
                    </div>
                </form>
            </div>
            <span class="litextension_support"><span class="litextension_support_icon">If you have any question, please don't hesitate to <a href="http://litextension.com/contacts/" target="_blank">Contact Us</a>. We look forward to assisting you.</span></span>
        </div>
    </div>
</div>