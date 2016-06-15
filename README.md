# PHPPython
===================
コンパイル済みのpythonをPHPで動かすためのリポジトリです。 **PHP 7** 以上で動作します。
動作確認はPython2.7で行っています。

# 動かしてみる
===================
さっそく動かしてみましょう。

Pythonをコンパイルする

```bash
$ python -m compileall /path/to/code.py
```

PHPPythonを実行する

```php
<?php

// pythonを解釈するためのクラスを読み込みます。
require 'PHPPython/Core/PHPPython.php';

// pythonのバイトコードを実行するためのクラスを読み込みます。
require 'PHPPython/Core/Code/Invoker.php';

// クラスのインスタンスを生成します。
$PHPPython = new PHPPython\PHPPython('/path/to/code.pyc');

// コンパイルされているPythonのバージョンを調べます。
printf("%s\n", $PHPPython->getVersion());

// バイトコードをPHP用のオブジェクトに変換します。
$code = new PHPPython\Code($PHPPython);

// pythonのバイトコードを実行するためのクラスをインスタンス化します。
$invoker = new PHPPython\Code\Invoker($code);

// 実際に実行します。
$invoker(/* 引数 */); // または、$invoker->invoke(/* 引数 */);

// 実行した際のオペレーションコードの一覧を表示します。
$invoker->debug();

```

# 型について
===================
pythonとなるべく合わせるようにはしていますが、PHPの性質上合わせられない部分があります。
下記に比較表を記載します。

|Pythonの型        |PHPの型         |
|:-------------:|:-------------:|
|null |null |
|none |null |
|boolean | boolean |
|char |string |
|byte |string |
|short |int |
|int |int |
|long |int |
|float |float |
|double |float |
|list |PHPPython\Object\PythonList (extends ArrayObject) |
|dict |PHPPython\Object\PythonDictionary (extends ArrayObject) |
|tuple |PHPPython\Object\PythonTuple (extends ArrayObject) |

※ 上記はまだ書き途中です。

# Java版もあるよ！
===================
JARがつらすぎて開発が止まってます。有志募集中。
PHPJava: https://github.com/memory-agape/PHPJava
