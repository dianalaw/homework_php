<div class="site"> 

<?php require_once './header.php';?>

<main class="contact">
    <p>If you have any questions, don't hesitate to fill the form. We will contact you as soon as possible and make everything clear!</p>

    <form action="" method ="POST">

        <div class="info_form">
            What's your name?* <br/>
            <input type="text" name= "name" required minlength="3" maxlength="15" placeholder="Jack"/>
        </div>

        <div class="info_form">
            Your phone number* <br/>
            <input type="tel" name= "tel" required minlength="12" maxlength="15" placeholder="+375291112233"/>
        </div>

        <div class="info_form">
            Your e-mail <br/>
            <input type="email" name= "email"  minlength="7" maxlength="20" placeholder="name@gmail.com"/>
        </div>

        <div class="info_form">
            Preferred contact<br/>
            <input  type="radio" name="contact_type"/>Via phone<br/>
            <input  type="radio" name="contact_type"/>Via e-mail<br/>
        </div>

        <div class="info_form">
            Leave your message here*<br/>
            <textarea required name="message" id="" cols="30" rows="10" maxlength="200">Leave your question here</textarea>
        </div>

        <button class="button">Send</button>

    </form>
</main>

<?php require_once './footer.php';?>

</div>