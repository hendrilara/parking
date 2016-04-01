(function(){

    var loading_options = {
        finishedMsg: "<div class='end-msg'>Congratulations! You've reached the end of the internet</div>",
        msgText: "<div class='center'>Loading news items...</div>",
        img: "/js/ajax-loader.gif"
    };

    $('#items').infinitescroll({
      loading : loading_options,
      navSelector : "#news .pagination",
      nextSelector : "#news .pagination li.active + li a",
      itemSelector : "#items li.item"
    });
})();