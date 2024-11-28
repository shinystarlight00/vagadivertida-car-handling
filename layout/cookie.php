<div class="cookie-modal" id="cookieModal">
    <h4>Cookies and Privacy</h4>
    <p>This website uses cookies to guarantee the best user browsing experience.</p>
    <div class="flex justify-content-end">
      <button id="acceptBtn">Accept</button>
      <button id="rejectBtn" class="secondary">Reject</button>
    </div>
</div>

<script>
  if (!document.cookie.split('; ').find(row => row.startsWith('vaga_divertida_car_handling_cookie_policy_accepted'))) {
    document.getElementById('cookieModal').style.opacity = 100;
  }

  document.getElementById('acceptBtn').addEventListener('click', function() {
    document.cookie = "vaga_divertida_car_handling_cookie_policy_accepted=true; max-age=" + (30 * 24 * 60 * 60) + "; path=/";
    document.getElementById('cookieModal').style.opacity = 0;
  });

  document.getElementById('rejectBtn').addEventListener('click', function() {
    document.cookie = "vaga_divertida_car_handling_cookie_policy_accepted=false; max-age=" + (30 * 24 * 60 * 60) + "; path=/";
    document.getElementById('cookieModal').style.opacity = 0;
  });
</script>