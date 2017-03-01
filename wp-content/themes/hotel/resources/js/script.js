$('#topPage').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 1000);
    return false;
 });

function isPalindrom(str) {
    return (str == str.split('').reverse().join(''));
}


function proveri(str) {
    var k = str.length-1;
    var temp;
    for(var i = 0; i < str.length;i++) {
        temp[i] = str[k];
        k--;
    }
    return str == temp;

}