document.write(`
  <!-- Footer -->
        <footer class="footer">
          &copy;<span id="year">2021</span>, Pavel Kvasnička,
          pavelkvasnicka@gmail.com
          <script>
            document.getElementById("year").innerHTML = new Date().getFullYear();
          </script>
        </footer>
      </div>
    </body>
  </html>
`);