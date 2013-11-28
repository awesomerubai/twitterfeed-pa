(function() {

  var Twitter = {
    init: function() {
      this.template = $('#tweets-template').html();
      this.container = $('ul.tweets');

      this.fetch();
    },

    attachTemplate: function() {
      var template = Handlebars.compile(this.template);

      this.container.append( template( this.tweets ) );
    },

    fetch: function() {
      var self = this;

      $.getJSON('status.php', function(data){

        self.tweets = $.map(data.statuses, function(tweet){
          return {
            author: tweet.user.name,
            tw_handle: tweet.user.screen_name,
            thumb: tweet.user.profile_image_url,
            tweet: tweet.text,
            url: 'https://www.twitter.com/' + tweet.user.screen_name + '/status/' + tweet.id_str
          };

        });

        self.attachTemplate();
        // console.log(self.tweets);

      }); // Get Json
      
    }
  
  } // var Twitter

  Twitter.init();

})();
