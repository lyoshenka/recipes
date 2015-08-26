function ready(fn) {
  if (document.readyState != 'loading'){
    fn();
  } else if (document.addEventListener) {
    document.addEventListener('DOMContentLoaded', fn);
  } else {
    document.attachEvent('onreadystatechange', function() {
      if (document.readyState != 'loading') {
        fn();
      }
    });
  }
}

function addEventListener(el, eventName, handler) {
  if (el.addEventListener) {
    el.addEventListener(eventName, handler);
  } else {
    el.attachEvent('on' + eventName, function() {
      handler.call(el);
    });
  }
}

function forEachElement(selector, fn) {
  var elements = document.querySelectorAll(selector);
  for (var i = 0; i < elements.length; i++) {
    fn(elements[i], i);
  }
}

function swapContent(a, b) {
  var aText = a.textContent || a.innerText,
      bText = b.textCOntent || b.innerText,
      aHtml = a.innerHtml,
      bHtml = b.innerHtml;

  if (a.textContent !== undefined) {
    a.textContent = bText;
    b.textContent = aText;
  }
  else {
    a.innerText = bText;
    b.innerText = aText;
  }
  
  a.innerHtml = bHtml;
  b.innerHtml = aHtml;
}


ready(function(){
  var currLang = 'en', 
      chosenLang = Cookies.get('recipe-language') || 'en',
      switcher = document.getElementById('js-language-switcher'),
      currHeader = switcher.querySelectorAll('.js-current')[0],
      otherHeader = switcher.querySelectorAll('.js-other')[0];

  var updateLang = function() {
    var showEnglish = function() {
      forEachElement('.english-only', function(el) { el.style.display = '';  } );
      forEachElement('.russian-only', function(el) { el.style.display = 'none';  } );
    };
    var showRussian = function() {
      forEachElement('.english-only', function(el) { el.style.display = 'none';  } );
      forEachElement('.russian-only', function(el) { el.style.display = '';  } );
    };
  
    if (currLang == chosenLang) { 
      return 
    };
    
    swapContent(currHeader, otherHeader);

    if (chosenLang == 'en') {
      showEnglish();
    } else {
      showRussian();
    }
  
    Cookies.set('recipe-language', chosenLang, { expires: Infinity });
    currLang = chosenLang;
  };
  
  updateLang();
  addEventListener(otherHeader, 'click', function() {
    chosenLang = currLang == 'en' ? 'ru' : 'en';
    updateLang();
  });
});

