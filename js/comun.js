
$(document).ready(function()
{
    if(RunRoundies())
    {
        var BrowserFind = {
            init: function () {
                this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
                this.version = this.searchVersion(navigator.userAgent)
                || this.searchVersion(navigator.appVersion)
                || "an unknown version";
                this.OS = this.searchString(this.dataOS) || "an unknown OS";
            },
            searchString: function (data) {
                for (var i=0;i<data.length;i++)	{
                    var dataString = data[i].string;
                    var dataProp = data[i].prop;
                    this.versionSearchString = data[i].versionSearch || data[i].identity;
                    if (dataString) {
                        if (dataString.indexOf(data[i].subString) != -1)
                            return data[i].identity;
                    }
                    else if (dataProp)
                        return data[i].identity;
                }
            },
            searchVersion: function (dataString) {
                var index = dataString.indexOf(this.versionSearchString);
                if (index == -1) return;
                return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
            },
            dataBrowser: [
            {
                string: navigator.userAgent,
                subString: "Chrome",
                identity: "Chrome"
            },
            {
                string: navigator.userAgent,
                subString: "OmniWeb",
                versionSearch: "OmniWeb/",
                identity: "OmniWeb"
            },
            {
                string: navigator.vendor,
                subString: "Apple",
                identity: "Safari",
                versionSearch: "Version"
            },
            {
                prop: window.opera,
                identity: "Opera"
            },
            {
                string: navigator.vendor,
                subString: "iCab",
                identity: "iCab"
            },
            {
                string: navigator.vendor,
                subString: "KDE",
                identity: "Konqueror"
            },
            {
                string: navigator.userAgent,
                subString: "Firefox",
                identity: "Firefox"
            },
            {
                string: navigator.vendor,
                subString: "Camino",
                identity: "Camino"
            },
            {
                string: navigator.userAgent,
                subString: "Netscape",
                identity: "Netscape"
            },
            {
                string: navigator.userAgent,
                subString: "MSIE",
                identity: "Explorer",
                versionSearch: "MSIE"
            },
            {
                string: navigator.userAgent,
                subString: "Gecko",
                identity: "Mozilla",
                versionSearch: "rv"
            },
            {
                string: navigator.userAgent,
                subString: "Mozilla",
                identity: "Netscape",
                versionSearch: "Mozilla"
            }
            ],
            dataOS : [
            {
                string: navigator.platform,
                subString: "Win",
                identity: "Windows"
            },
            {
                string: navigator.platform,
                subString: "Mac",
                identity: "Mac"
            },
            {
                string: navigator.userAgent,
                subString: "iPhone",
                identity: "iPhone/iPod"
            },
            {
                string: navigator.platform,
                subString: "Linux",
                identity: "Linux"
            } ]

        };
        BrowserFind.init();
        if (BrowserFind.browser != "Explorer" ) {
            DD_roundies.addRule('.curved', 10, true);
            DD_roundies.addRule('.curved5', 5, true);
            DD_roundies.addRule('.curvedtop5', 5, true);
            DD_roundies.addRule('.curvedbottom5', 5, true);
            DD_roundies.addRule('.curvedtop10', '10px 0 10px 0', true);
            DD_roundies.addRule('.curvedbottom10', 10, true);
        } else if (BrowserFind.version >= 7) {
            DD_roundies.addRule('.curved', 10, true);
            DD_roundies.addRule('.curved5', 5, true);
            DD_roundies.addRule('.curvedtop5', 5, true);
            DD_roundies.addRule('.curvedbottom5', 5, true);
            DD_roundies.addRule('.curvedtop10', '10px 0 10px 0', true);
            DD_roundies.addRule('.curvedbottom10', 10, true);
        } else if (BrowserFind.version >= 6) {
            DD_roundies.addRule('.classie6png');
            DD_roundies.addRule('.curved', 10, true);
            DD_roundies.addRule('.curved5', 5, true);
            DD_roundies.addRule('.curvedtop5', 5, true);
            DD_roundies.addRule('.curvedbottom5', 5, true);
            DD_roundies.addRule('.curvedtop10', '10px 0 10px 0', true);
            DD_roundies.addRule('.curvedbottom10', 10, true);
        }
    }
});

function esIE6()
{
    return ($.browser.msie && $.browser.version == '6.0');
}

function esIE()
{
    return ($.browser.msie);
}

function RunRoundies()
{
    var el = document.getElementById('configPerfil');
    return !(el && esIE());
}

