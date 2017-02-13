<html>
<head>

</head>
<body>

	<div id="fb-root"></div>
    	<script>(function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>	

<h2> I GOT HERE <h2>
  <p> {{ $user->name }}</p>
  <p>
        <img alt="star" src="{{ asset('uploads/' . $user->image) }}" />

  </p>
  <p> {{ $user->image }} </p>
  <div class="fb-share-button" data-href="https://www.google.ca" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.google.ca%2F&amp;src=sdkpreparse">Share
</a></div>

</body>
</html>