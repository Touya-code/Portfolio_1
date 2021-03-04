var url = new URL(window.location.href);
var params = url.searchParams;

if (params.get('value') == '0') {
    var element = document.documentElement;
    var bottom = element.scrollHeight - element.clientHeight;
    window.scroll(0, bottom);
}