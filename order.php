<?php include 'header.php'; ?>
<div class="main">
  <div class="centerContent">
    <div class="content3">
      <h1>Objednávka</h1>
      <br />
      <hr />
      <br />
      <form action="/ajax/email" class="contact-form" method="POST" enctype="multipart/form-data"
        onsubmit="checkInputs(this);">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="jmeno" required /><br /><br />
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="jmeno.prijmeni@gmail.com" required /><br /><br />
        <label for="file">File(.stl): (max 70KB)</label>
        <input type="file" id="file" name="file" accept=".stl" required /><br /><br />
        <p>Description : <br /></p>
        <textarea rows="15" cols="70" id="description" name="description"></textarea>
        <br />
        <button type="submit" id="submit" class="btn">Send</button>
      </form>
    </div>
  </div>
</div>
<?php include 'footer.php'; ?>