var be = be || {};

/**
    Animated navigation
**/

be.navigation = new function () {

    function toArray(nodeList) {
        return Array.prototype.slice.call(nodeList);
    }

    this.positionDot = function () {

        var navi = toArray(document.querySelectorAll('.navigation-simple'));

        navi.forEach(function (el) {

            var thisNavi = el,
                naviPos = thisNavi.getBoundingClientRect().top,
                naviItems = toArray(thisNavi.querySelectorAll('.navigation__anchor')),
                naviActiveDot = thisNavi.querySelector('.navigation__active-dot'),
                naviActiveAnchorCircle = thisNavi.querySelector('.navigation__anchor--active > .navigation__anchor-circle');

            //Set dot�s default location
            if (naviActiveAnchorCircle !== null) {

                var naviActiveAnchorCirclePos = Math.round(naviActiveAnchorCircle.getBoundingClientRect().top - naviPos) + 'px';
                naviActiveDot.style.transform = "translateY(" + naviActiveAnchorCirclePos + ")";

            }
            else {
                naviActiveDot.style.transform = "translateY(-15px)";
                naviActiveDot.style.transform = "scale(0)";
            }

        });

    }

    this.dot = function () {

        var navi = toArray(document.querySelectorAll('.navigation-simple'));

        navi.forEach(function (el) {

            var thisNavi = el,
                naviPos = thisNavi.getBoundingClientRect().top,
                naviItems = toArray(thisNavi.querySelectorAll('.navigation__anchor')),
                naviActiveDot = thisNavi.querySelector('.navigation__active-dot'),
                naviActiveAnchorCircle = thisNavi.querySelector('.navigation__anchor--active > .navigation__anchor-circle');
            
            //1. Default position animated dot
            be.navigation.positionDot();

            //2. On item hover, move the active dot
            naviItems.forEach(function (el) {

                el.addEventListener("mouseenter", function () {

                    var naviCircle = el.querySelector('.navigation__anchor-circle'),
                        naviCirclePos = naviCircle.getBoundingClientRect().top,
                        naviActiveDotPos = naviActiveDot.getBoundingClientRect().top,
                        newDotPos = Math.round(naviCirclePos - thisNavi.getBoundingClientRect().top) + 'px';

                    naviActiveDot.style.transform = "translateY(" + newDotPos + ")";

                });

            });

            //3. Return dot�s to the default location if leaving navigation
            thisNavi.addEventListener("mouseleave", function () {

                be.navigation.positionDot();

            });

        });

    }

    this.toggleChildren = function () {

        var navi = document.querySelector('.navigation');
        var naviParentItemAnchor = toArray(document.querySelectorAll('.navigation__li--parent > .navigation__anchor'));

        if (navi !== null) {

            naviParentItemAnchor.forEach(function (el) {

                if (el.getAttribute("href") === "#") {
                    el.addEventListener('click', function (event) {
                        event.preventDefault();

                        //1. Open item with children
                        el.parentNode.classList.toggle('active');

                        //2. De-activate the siblings
                        var naviParentItemSiblings = toArray(this.parentElement.parentElement.children)
                            .filter(function (node) { return node !== el.parentNode; });

                        naviParentItemSiblings.forEach(function (el) {
                            el.classList.remove('active');
                        });

                    });
                }

            });
        }

    }

    this.init = function () {

        be.navigation.dot();
        be.navigation.toggleChildren();

    }

};
