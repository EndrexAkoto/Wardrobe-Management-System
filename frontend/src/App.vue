<template>
  <div class="landing-page">
    <!-- Header Section -->
    <header class="header">
      <img src="" alt="" class="logo" />
      <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#cta">Get Started</a></li>
          <li><router-link to="/register">Sign Up</router-link></li>
          <li><router-link to="/login">Login</router-link></li>

        </ul>
      </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
      <h1>Manage Your Wardrobe with Ease</h1>
      <p>Organize your outfits, track inventory, and style effortlessly.</p>
      <button class="cta-button">Get Started</button>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
      <h2>About Our Wardrobe Management System</h2>
      <p>Our system helps you keep track of your clothing, create outfits, and never forget what you own.</p>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
      <h2>Key Features</h2>
      <div class="feature-grid">
        <div class="feature-item">
          <img src="./assets/02.png" alt="Track Items" />
          <p>Track your wardrobe items</p>
        </div>
        <div class="feature-item">
          <img src="./assets/03.png" alt="Outfits" />
          <p>Create and save outfit combinations</p>
        </div>
        <div class="feature-item">
          <img src="./assets/04.png" alt="Plan" />
          <p>Plan what to wear for any occasion</p>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section id="cta" class="cta">
      <h2>Start Organizing Your Wardrobe Today!</h2>
      <button class="cta-button">Sign Up Now</button>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <p>&copy; 2025 Wardrobe Management System. All Rights Reserved.</p>
    </footer>
  </div>
</template>

<style scoped>
.landing-page {
  font-family: Arial, sans-serif;
  text-align: center;
  color: #333;
}

/* Header Styles */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background: #2C3E50;
  color: white;
}

.logo {
  height: 50px;
}

nav ul {
  list-style: none;
  display: flex;
  gap: 20px;
}

nav ul li {
  display: inline;
}

nav ul li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
}

/* Hero Section */
.hero {
  background: #1E88E5;
  color: white;
  padding: 50px 20px;
}

.cta-button {
  background: white;
  color: #1E88E5;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  font-size: 18px;
  margin-top: 10px;
}

.about, .features, .cta {
  padding: 40px 20px;
}

.feature-grid {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}

.feature-item {
  text-align: center;
  max-width: 200px;
}

.feature-item img {
  width: 100px;
  height: 100px;
}

/* Footer */
.footer {
  background: #2C3E50;
  color: white;
  padding: 10px;
}
</style>
