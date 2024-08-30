<section id="contact" class="contact ScrollTrigger-section">
      <h2>Contact</h2>
      <div class="contact-wrapper">
        <div class="Contact-text">
          <p>レッスン、オーダーフラワーのご予約、ご要望等お気軽にご連絡ください。</p>
          <p>24時間以内に返信いたします。</p>
        </div>
        <form action="submit_form.php" method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit">Send</button>
    </form>
      </div>
  </section>