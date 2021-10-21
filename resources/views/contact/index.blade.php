@extends('layouts.app')

@section('title', 'お問い合わせ')
@section('content')
<h1>お問い合わせ</h1>
<script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
<form class="h-adr">
<span class="p-country-name" style="display: none;">Japan</span>
<table>
    <tr>
        <th><span class="required">お名前</span></th>
        <td><input type="text"></td>
        <td><input type="text"></td>
    </tr>
    <tr class="example">
        <th></th>
        <td>例）山田</td>
        <td>例）太郎</td>
    </tr>
    <tr>
        <th><span class="required">性別</span></th>
        <td>
            <label><input type="radio" name="gender" value="man" checked>男</label>
            <label><input type="radio" name="gender" value="woman">女</label>
        </td>
    </tr>
    <tr>
        <th><span class="required">メールアドレス</span></th>
        <td colspan="2"><input type="text"></td>
    </tr>
    <tr class="example">
        <th></th>
        <td colspan="2">例）test@example.com</td>
    </tr>
    <tr>
        <th><span class="required">郵便番号</span></th>
        <td colspan="2">
            <label style="display: flex; align-items: center;">
                <span style="margin: 0px 10px;">〒</span>
                <input type="text" class="p-postal-code" size="8" maxlength="8" style="flex: 1;">
            </label>
        </td>
    </tr>
    <tr class="example">
        <th></th>
        <td colspan="2">例）123-4567</td>
    </tr>
    <tr>
        <th><span class="required">住所</span></th>
        <td colspan="2"><input type="text" class="p-region p-locality p-street-address"></td>
    </tr>
    <tr class="example">
        <th></th>
        <td colspan="2">例）東京都渋谷区千駄ヶ谷1-2-3</td>
    </tr>
    <tr>
        <th>建物名</th>
        <td colspan="2"><input type="text"></td>
    </tr>
    <tr class="example">
        <th></th>
        <td colspan="2">例）千駄ヶ谷マンション101</td>
    </tr>
    <tr class="opinion">
        <th><span class="required">ご意見</span></th>
        <td colspan="2"><textarea rows="6"></textarea></td>
    </tr>
</table>
<div class="button-wrapper">
    <button type="submit">確認</button>
</div>
</form>
@endsection
