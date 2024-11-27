<article id="main-title">
    <h1>Let's Talk</h1>
</article>
<article>
    <section id="section-one">
        <figure>
            <img src = "images/logo1.jpg" width="auto">
            <figcaption>Let's Talk</figcaption>
        </figure>
<section class="contact">
    <h1><span>Message</span> me here!</h1>
        <div class="form-container">
            <form action="pages/config.php" method="POST">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" placeholder="Your first name.." required>

                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Your email.." required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
</section>