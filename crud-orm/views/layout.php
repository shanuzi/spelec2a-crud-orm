<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Manager</title>
  <style>
    body{font-family:system-ui,sans-serif;max-width:820px;margin:2rem auto;padding:0 1rem;color:#222}
    table{width:100%;border-collapse:collapse;margin-top:1rem}
    th,td{border-bottom:1px solid #ddd;padding:.5rem;text-align:left}
    .btn{display:inline-block;padding:.35rem .8rem;border:1px solid #555;border-radius:4px;background:#fff;color:#222;text-decoration:none;cursor:pointer;font-size:.9rem}
    .btn.danger{border-color:#b00;color:#b00}
    .btn.primary{background:#222;color:#fff}
    .flash{background:#e6f6e6;border:1px solid #9c9;padding:.6rem;border-radius:4px;margin:1rem 0}
    .errors{background:#fdeaea;border:1px solid #d99;padding:.6rem 1.5rem;border-radius:4px;margin:1rem 0}
    label{display:block;margin-top:1rem}
    input[type=text],input[type=email]{width:100%;padding:.5rem;box-sizing:border-box}
    form.inline{display:inline}
  </style>
</head>
<body>
  <h1><a href="index.php" style="color:inherit;text-decoration:none">Student Manager</a></h1>
  <?php if ($flash): ?><div class="flash"><?= e($flash) ?></div><?php endif; ?>
  <?= $content ?>
</body>
</html>
