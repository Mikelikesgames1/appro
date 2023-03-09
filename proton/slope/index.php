
<!DOCTYPE html>
<script>
  if (window.parent !== window.self) window.parent.postMessage("bonk", "*");
  window.addEventListener("DOMContentLoaded", function () {
    document.body.style.margin = "0";
    document.body.style.height = "100vh";
    document.body.style.overflow = "hidden";
  });
</script>
<html lang="en-us">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Slope</title>
    <link href="shared/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="TemplateData56/style.css" />
    <script src="TemplateData56/UnityProgress.js"></script>
    <link rel="shortcut icon" href="TemplateData/favicon.ico" />
    <link rel="icon" href="slope4.jpeg" />
    <script src="Build/UnityLoader.js"></script>
    <script>
      window.rWS = WebSocket;
      WebSocket = function (url, options) {
        var split = url.split("://");
        var prefix = "";
        if (!url.includes("arc.io")) {
          switch (split[0].toLowerCase()) {
            case "ws":
              prefix = "wss://onebigorange-tmm.tbt.mx/websocket/http://";
              break;
            case "wss":
              prefix = "wss://onebigorange-tmm.tbt.mx/websocket/https://";
              break;
            default:
              prefix = split[0];
          }
          return new (Function.prototype.bind.call(window.rWS, null, (split[1].match(/\//g) || []).length === 0 ? (split[1].includes("?") ? prefix + split[1].replace("?", "/?") : prefix + split[1] + "/") : prefix + split[1], options))();
        } else {
          return new window.rWS(url, options);
        }
      };
      var origOpen = XMLHttpRequest.prototype.open;
      XMLHttpRequest.prototype.open = function (...args) {
        if (!args[1].includes("arc.io")) args[1] = /^http/.test(args[1]) ? "https://onebigstatic-tmm.tbt.mx/static/" + args[1] : args[1];
        origOpen.apply(this, args);
      };
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/slope_27Sept.json", {
        onProgress: UnityProgress,
        Module: {
          onRuntimeInitialized: function () {
            UnityProgress(gameInstance, "complete");
          },
        },
      });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-98DP5VKS42"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "G-98DP5VKS42");
    </script>
    <script src="shared/lib.js" type="text/javascript"></script>
    <script src="shared/gamebreak/gamebreak.js" type="text/javascript"></script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="gameContainer" style="width: 100vw; height: 100vh;"></div>
    </div>
    <script type="application/javascript" src="/js/main.js"></script>
  </body>
</html>
