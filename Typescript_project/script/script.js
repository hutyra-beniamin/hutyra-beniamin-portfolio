var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var a = 0;
var mainRow = document.getElementById("mainRow");
Render(mainRow);
function Render(theNode) {
    var toRender = [];
    var Location = /** @class */ (function () {
        function Location(name, city, zipCode, address, img, created) {
            this.name = "";
            this.name = name;
            this.city = city;
            this.zipCode = zipCode;
            this.address = address;
            this.img = img;
            this.created = created;
        }
        Location.prototype.display = function () {
            theNode.innerHTML += "\n    <div class=\"col mb-4\" id=\"" + a + "\">\n    <div class=\"card loc text-center\">\n                <div class=\"card\">\n                    <img src=\"" + this.img + "\" class=\"img-fluid card-img-top d-none d-md-block\" alt=\"...\">\n                    <div class=\"card-body\">\n                        <h5 class=\"card-title\">" + this.name + "</h5>\n                        <p class=\"card-text\">" + this.address + ", " + this.zipCode + ", " + this.city + "</p>\n                    </div>\n                    <div class=\"card-footer\">\n\t\t\t\t            <small class=\"text-muted\">\n\t\t\t\t                &#128356;   Created:<br />\n\t\t\t\t                " + this.created + "\n\t\t\t\t            </small>\n\t\t\t\t        </div>\n                </div>\n                </div>\n            ";
            a++;
        };
        return Location;
    }());
    var Event = /** @class */ (function (_super) {
        __extends(Event, _super);
        function Event(name, city, zipCode, address, img, created, eventDate, eventTime, ticketPrice) {
            var _this = _super.call(this, name, city, zipCode, address, img, created) || this;
            _this.eventDate = eventDate;
            _this.eventTime = eventTime;
            _this.ticketPrice = ticketPrice;
            return _this;
        }
        Event.prototype.display = function () {
            theNode.innerHTML += "\n        <div class=\"col mb-4\" id=\"" + a + "\">\n    <div class=\"card loc text-center\">\n                <div class=\"card\">\n                    <img src=\"" + this.img + "\" class=\"img-fluid card-img-top d-none d-md-block\" alt=\"...\">\n                    <div class=\"card-body\">\n                        <h5 class=\"card-title\">" + this.name + "</h5>\n                        <p>Place: " + this.address + ",  " + this.zipCode + ",  " + this.city + " </p>\n                        <p>Date: " + this.eventDate + " Time: " + this.eventTime + " </p>\n                        <p>Price: " + this.ticketPrice + "</p>\n                    </div>\n                    <div class=\"card-footer\">\n\t\t\t\t            <small class=\"text-muted\">\n\t\t\t\t                &#128356;   Created:<br />\n\t\t\t\t                " + this.created + "\n\t\t\t\t            </small>\n\t\t\t\t        </div>\n                </div>\n            </div>\n            </div>";
            a++;
        };
        return Event;
    }(Location));
    var Restaurant = /** @class */ (function (_super) {
        __extends(Restaurant, _super);
        function Restaurant(name, city, zipCode, address, img, created, phone, kitchen, website) {
            var _this = _super.call(this, name, city, zipCode, address, img, created) || this;
            _this.phone = phone;
            _this.kitchen = kitchen;
            _this.website = website;
            return _this;
        }
        Restaurant.prototype.display = function () {
            theNode.innerHTML += "\n        <div class=\"col mb-4\" id=\"" + a + "\">\n    <div class=\"card loc text-center\">\n                <div class=\"card text-center\">\n                    <img src=\"" + this.img + "\" class=\"img-fluid card-img-top d-none d-md-block\" alt=\"...\">\n                    <div class=\"card-body\">\n                        <h5 class=\"card-title\">" + this.name + "</h5>\n                        <p class=\"card-text\">Place: " + this.address + ",  " + this.zipCode + ",  " + this.city + "</p>\n                        <p class=\"card-text\">Kitchen: " + this.kitchen + "</p>\n                        <p class=\"card-text\">Phone: " + this.phone + "</p>\n                        <p class=\"card-text\"><a href=\"" + this.website + "\">Website</a></p>\n                    </div>\n                    <div class=\"card-footer\">\n\t\t\t\t            <small class=\"text-muted\">\n\t\t\t\t                &#128356;   Created:<br />\n\t\t\t\t                " + this.created + "\n\t\t\t\t            </small>\n\t\t\t\t        </div>\n                </div>\n            </div>\n            </div>";
            a++;
        };
        return Restaurant;
    }(Location));
    if (mainRow) {
        toRender.push(new Location("St. Charles Church", "Vienna", 1010, "Karlsplatz 1", "img/img1.jpg", "13.09.2019 15:56"));
        toRender.push(new Location("Schönbrunn Park", "Vienna", 1013, "Maxingstraße 13b", "img/img2.jpg", "15.10.2020 17:46"));
        toRender.push(new Location("Wiener Rathaus", "Vienna", 1010, "Friedrich-Schmidt-Platz 1", "img/img3.jpg", "13.12.2017 10:56"));
        toRender.push(new Location("MuseumsQuartier", "Vienna", 1070, "Museumplatz 1", "img/img4.jpg", "27.03.2017 23:16"));
        toRender.push(new Restaurant("Santos Wieden", "Vienna", 1040, "Favoritenstraße 4/6", "img/img5.jpg", "10.10.2010 17:56", "01 9429902", "Mexican", "http://www.santos-bar.com/"));
        toRender.push(new Restaurant("Adlerhof", "Vienna", 1070, "Burggasse 51/6", "img/img6.jpg", "14.08.2018 17:56", "01 5224705", "International", "https://www.adlerhof.wien/"));
        toRender.push(new Restaurant("All Reis", "Vienna", 1150, "Schweglerstraße 12", "img/img7.jpg", "18.10.2019 19:56", "01 7864668", "Asiatich", "https://www.allreis.com/"));
        toRender.push(new Restaurant("Das Spittelberg", "Vienna", 1070, "Spittelberggasse 12", "img/img8.jpg", "29.03.2020 17:06", "01 5877628", "Österreichisch", "https://www.das-spittelberg.at/"));
        toRender.push(new Event("The Opernball", "Vienna", 1010, "Opernring 2", "img/img9.jpg", "11.02.2019 21:55", "2nd Feburar 2021", "20:00  – 24:00 ", "300,0"));
        toRender.push(new Event("The Vienna Marathon", "Vienna", 1020, "Prater", "img/img10.jpg", "14.05.2028 12:55", "18th April 2020", "9:00  – 15:00", "Free"));
        toRender.push(new Event("Wiener Symphoniker at the MQ", "Vienna", 1070, "Museumplatz 1", "img/img11.jpg", "11.06.2016 9:55", "25th June 2021", "17:00 – 21:00", "Free"));
        toRender.push(new Event("Wiener Wiesn Fest", "Vienna", 1020, "Kaiserwiese", "./img/img12.jpg", "30.09.2020 22:55", "24th September - 11th October 2021", "11:30 Uhr – 24:00 Uhr", "Depends"));
    }
    for (var i = 0; i < toRender.length; i++) {
        toRender[i].display();
    }
}
