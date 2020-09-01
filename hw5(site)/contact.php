<?php require_once './header.php'; ?>

<section class="contact">
    <div class="container">

        <h2>Contact us</h2>
        <p class="under_title">Proin iaculis purus consequat sem cure.</p>

        <div class= "form_comment">If you have any questions, don't hesitate to fill the form. <br/> We will contact you as soon as possible and make everything clear!</div>
        
        <form enctype= "multipart/form-data" action="/form.php" method="POST">

            <div class="info_form">
                What's your name?* <br/>
                <input type="text" name= "name" required minlength="3" maxlength="15" placeholder="Jack"/>
            </div>

            <div class="info_form">
                Your phone number* <br/>
                <input type="tel" name= "tel" required minlength="7" maxlength="15" placeholder="+375291112233"/>
            </div>

            <div class="info_form">
                Your e-mail <br/>
                <input type="email" name= "email"  minlength="7" maxlength="40" placeholder="name@gmail.com"/>
            </div>

            <div class="info_form">
                Preferred type of contact<br/>
                <input  type="radio" name="contact_type" value="phone"/>Via phone<br/>
                <input  type="radio" name="contact_type" value="mail"/>Via e-mail<br/>
            </div>

            <div class="info_form">
                Leave your message here*<br/>
                <textarea required name="message" id="" cols="30" rows="10" minlength="5" maxlength="250">Leave your question here</textarea>
            </div>

            <button class="button">Send</button>          
            
        </form>

    </div>
</section>

<?php require_once './footer.php'; ?>