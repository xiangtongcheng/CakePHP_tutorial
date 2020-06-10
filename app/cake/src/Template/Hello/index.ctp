<div>
    <h3> Index Page</h3>
    <p><?= $message ?></p>
    <form method="post" action="/hello/index">
    <input type="text" name="text1">
    <input type="submit">
    </form>
</div>

<script>
  // CSRFトークン
  var CSRF_TOKEN = "<?= $this->request->getParam('_csrfToken') ?>";

  window.onload = function() {
    // 各 <form> で method="post" なら CSRFトークンの <input> を末尾に追加
    var forms = document.getElementsByTagName("form");
    var length = forms.length;
    for (var i = 0; i < forms.length; i++) {
      var form = forms[i];
      if (form.getAttribute("method") !== "post") {
          continue;
      }
      // CSRFトークンの <input> を生成
      var inputCsrf = document.createElement("input");
      inputCsrf.setAttribute("type", "hidden");
      inputCsrf.setAttribute("name", "_csrfToken");
      inputCsrf.value = CSRF_TOKEN;
      // <form> に追加
      form.appendChild(inputCsrf);
    }
  };
</script>