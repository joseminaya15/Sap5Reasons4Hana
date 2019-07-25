<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.rawgit.com/oauth-io/oauth-js/c5af4519/dist/oauth.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.12.0/bootstrap-social.min.css">

<a id="linkedin-button" class="btn btn-block btn-social btn-linkedin">
  <i class="fa fa-linkedin"></i> Sign in with Linkedin
</a>

 <script>
    	$('#linkedin-button').on('click', function() {
		// Initialize with your OAuth.io app public key
		OAuth.initialize('RhmXPkYzSNXdbM1ITGCETIv6u0k');
		  OAuth.popup('linkedin2').then(linkedin => {
		    // Get your linkedin profile id:
		    linkedin.me().then(data => {
		      let id = data.id;
		      console.log(data);
		      $('#nombre_completo').val(data.name);
		      $('#email').val(data.email);
		      // Share a post
		      linkedin.post({
		      	url: "/v2/ugcPosts",
		      	data: JSON.stringify({
		    			"author": `urn:li:person:${id}`,
		    			"lifecycleState": "PUBLISHED",
		    			"specificContent": {
		        		"com.linkedin.ugc.ShareContent": {
		            	"shareCommentary": {
		                "text": "This post is shared using OAuth.io!"
		            	},
		            	"shareMediaCategory": "NONE"
		        		}
		    			},
		    			"visibility": {
		        		"com.linkedin.ugc.MemberNetworkVisibility": "PUBLIC"
		    		}
		      }),
		      headers: {
		         "x-li-format": "json",
		         "X-Restli-Protocol-Version": "2.0.0",
		         "Content-Type": "application/json"
		      }
		    }).then(data => {
		      console.log("success:", data);
		      }).fail(err => { console.log("err:",err) });
		  })
		});
		    
		})
    </script>