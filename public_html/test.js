<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    var fibonacci_series = function (n)
    {
      if (n===1)
      {
        return [0, 1];
      }
      else
      {
        var s = fibonacci_series(n - 1);
        s.push(s[s.length - 1] + s[s.length - 2]);
        return s;
      }
    };

     console.log(fibonacci_series(8));
  </body>
</html>
