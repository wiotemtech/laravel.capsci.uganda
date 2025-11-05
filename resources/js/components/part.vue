<template>
  <section class="scmh-fund-section">
    <div class="scmh-fund-content">
      <h2 class="scmh-fund-subtitle">Become Our Partner</h2>
      <h1 class="scmh-fund-title">Join Us in Making a Difference</h1>
      <p class="scmh-fund-description">
         Empowering lives with care, hope, and awareness for all affected by sickle cell disease.
      </p>
      
          <router-link to="/report" tag="button" class="scmh-fund-button">
        Partner with us
    </router-link>

    </div>
  </section>
</template>

<style scoped>
.scmh-fund-section {
  background: linear-gradient(
      rgba(0, 0, 0, 0.5), 
      rgba(0, 0, 0, 0.5)
    ),
    url('/public/assets/images/17.jpg') no-repeat center center;
  background-size: cover;
  padding: 80px 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  text-align: center;
  min-height: 450px;
  position: relative;
}

.scmh-fund-content {
  max-width: 800px;
  padding: 30px;
  border-radius: 12px;
  background: rgba(0, 0, 0, 0.4);
  backdrop-filter: blur(6px);
  transition: transform 0.3s ease, background 0.3s ease;
}

.scmh-fund-content:hover {
  transform: translateY(-5px);
  background: rgba(0, 0, 0, 0.6);
}

.scmh-fund-subtitle {
  font-size: 1.2rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: red;
  margin-bottom: 10px;
}

.scmh-fund-title {
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 20px;
  line-height: 1.2;
}

.scmh-fund-description {
  font-size: 1.15rem;
  line-height: 1.6;
  margin-bottom: 25px;
  color: #f3f4f6;
}

.scmh-fund-button {
  padding: 12px 28px;
  font-size: 1rem;
  font-weight: 600;
  background-color: white; 
  border: none;
  text-decoration: none;
  color: red;
  border-radius: 8px;
  cursor: pointer;
  transition: background-color 0.2s ease, transform 0.2s ease;
}

.scmh-fund-button:hover {
  background-color:rgba(128, 0, 0, 0.8) ;
  color:white;
  transform: translateY(-2px);
}

@media (max-width: 768px) {
  .scmh-fund-title {
    font-size: 2rem;
  }
  .scmh-fund-description {
    font-size: 1rem;
  }
  .scmh-fund-section {
    padding: 60px 15px;
  }
}
</style>
