var imgzzz = function () {

  'use strict';

  var Viewer = window.Viewer;
  var console = window.console || { log: function () {} };
  var pictures = document.querySelector('.docs-pictures');
  var toggles = document.querySelector('.docs-toggles');
  var buttons = document.querySelector('.docs-buttons');
  var options = {
        // inline: true,
        url: 'data-original',
        ready:  function (e) {
          console.log(e.type);
        },
        show:  function (e) {
          console.log(e.type);
        },
        shown:  function (e) {
          console.log(e.type);
        },
        hide:  function (e) {
          console.log(e.type);
        },
        hidden:  function (e) {
          console.log(e.type);
        },
        view:  function (e) {
          console.log(e.type);
        },
        viewed:  function (e) {
          console.log(e.type);

        }
      };
  var viewer;




  addEventListener(pictures, 'ready', function (e) {
    console.log(e.type);
  });
  addEventListener(pictures, 'show', function (e) {
    console.log(e.type);
  });
  addEventListener(pictures, 'shown', function (e) {
    console.log(e.type);
  });
  addEventListener(pictures, 'hide', function (e) {
    console.log(e.type);
  });
  addEventListener(pictures, 'hidden', function (e) {
    console.log(e.type);
  });
  addEventListener(pictures, 'view', function (e) {
    console.log(e.type);
  });
  addEventListener(pictures, 'viewed', function (e) {
    console.log(e.type);
  });
  viewer = new Viewer(pictures, options);



};
