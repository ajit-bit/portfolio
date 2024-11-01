<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Portfolio</title>
  <style>
    body {
        font-family: Georgia, "Times New Roman", Times, serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
  color: #333;
}
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
      }
      nav ul li {
        list-style: none;
        margin: 15px;
        font-size: 28px;
      }
      nav ul li a {
        text-decoration: none;
        color: white;
      }
      nav ul li a:hover {
        text-decoration: none;
        color: rgb(26,212,215);
        font-size: 30px;

      }
      .left {
        font-size: 30px;
        color: white;
      }

#projects {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

#projects h2 {
  text-align: center;
  font-size: 2.5em;
  margin-bottom: 30px;
}

.projects-grid {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.project-card {
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 15px;
  overflow: hidden;
  width: 30%;
  transition: transform 0.3s ease;
}

.project-card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.project-info {
  padding: 20px;
}

.project-info h3 {
  font-size: 1.8em;
  margin: 0 0 10px;
}

.project-info p {
  color: #666;
  font-size: 1.1em;
  margin-bottom: 20px;
}

.btn {
  display: inline-block;
  background-color: #007bff;
  color: white;
  padding: 10px 15px;
  text-decoration: none;
  border-radius: 5px;
  margin-right: 10px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3;
}

.project-card:hover {
  transform: translateY(-10px);
}

footer {
  text-align: center;
  background-color: #007bff;
  color: white;
  position: absolute;
  width: 100%;
  bottom: 0;
}

  </style>
</head>
<body>
  
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
  <section id="projects">   
    <h2>My Projects</h2>
    <div class="projects-grid">
      <div class="project-card">
        <div class="project-info">
          <h3>Portfolio</h3>
          <p>Detailed information of myself.</p>
          <a href="https://github.com/ajit-bit/portfolio.git" class="btn">View on GitHub</a>
        </div>
      </div>

      <div class="project-card">
        <div class="project-info">
          <h3>Sports Shopping Website</h3>
          <p>An e-commerce platform for athletes to buy sporting goods with a focus on user experience and performance.</p>
          <a href="https://github.com/ajitpillai/sports-shopping-website" class="btn">View on GitHub</a>
        </div>
      </div>
  </section>

  <footer>
    <p>&copy; 2024 Ajit Pillai - All Rights Reserved</p>
  </footer>

</body>
</html>
