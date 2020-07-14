@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    createです
                    <form method="POST" action="">
                        氏名
                        <input type="text" name="your_name">
                        <br>
                        件名
                        <input type="text" name="title">
                        <br>
                        メールアドレス
                        <input type="email" name="email">
                        <br>
                        ホームページ
                        <input type="url" name="url">
                        <br>
                        性別
                        <input type="radio" name="gender" value="0">男性
                        <input type="radio" name="gender" value="1">女性
                        <br>
                        年齢
                        <select name="age">
                            <option value="">選択してください</option>
                            <option value="1">~19歳</option>
                            <option value="2">20歳~29歳</option>
                            <option value="3">30歳~39歳</option>
                            <option value="4">40歳~49歳</option>
                            <option value="5">50歳~59歳</option>
                            <option value="6">60歳~69歳</option> 
                        </select>
                        <br>
                        お問い合わせ内容
                        <textarea name="contact"></textarea>
                        <br>

                        <input class="form-check-input" type="checkbox" id="caution">
                        <label class="form-check-label" for="caution">注意事項に同意する</label>
                        <br>
                        
                        <input class="btn btn-info" type="submit" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection