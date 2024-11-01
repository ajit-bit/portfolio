<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    // Email handling logic can be added here, such as mail() function
    echo "<p style='text-align:center; padding:10px;'>Thank you, $name! Your message has been received.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Ajit Pillai</title>
    <style>
        /* Embedded CSS */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; color: #333; }
        header { background-color: #f5f5f5; padding: 10px; text-align: center; }
        .logo { font-size: 1.5em; font-weight: bold; }
        nav {
        background-color: rgb(5, 5, 52);
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 80px;
      }
      nav ul {
        display: flex;
        justify-content: center;
        font-size: 28px;
      }
      nav ul li {
        list-style: none;
        margin: 15px;
      }
      nav ul li a {
        text-decoration: none;
        color: white;
      }
      nav ul li a:hover {
        color: rgb(26, 212, 215);
        font-size: 30px;
      } 
      .left {
        font-size: 1.9rem;
        color: white;
      }
        .contact { padding: 40px 20px; max-width: 500px; margin: auto; }
        .contact h2{
            text-align: center;
            padding-bottom: 30px;
            font-size: 50px;
            font-style: italic;
        }
        .contact form { display: flex; flex-direction: column; gap: 15px; }
        .contact input, .contact textarea { padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        .contact button { padding: 10px; background-color: #333; color: #fff; border: none; border-radius: 5px; cursor: pointer; }
        .contact button :hover{ font-size: 30px; color: black;} 
    </style>
</head>
<body>
    <!-- Header -->
    <header>
      <nav>
        <div class="left">Ajit portfolio</div>
        <div class="right">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Project</a></li>
            <li><a href="contact.php">Contact me </a></li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Contact Section -->
    <section class="contact">
        <h2>Contact Me</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
</body>
</html>
