
function check() {
    let result = window.confirm('送信してもよろしいですか?');
    if(result) {
        return true;
    }else {
        window.alert('キャンセルされました');
        return false;
    }
    
}
