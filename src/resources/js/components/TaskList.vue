<template>
    <table>
        <thead>
            <tr>
                <th>番号</th>
                <th>タイトル</th>
                <th>内容</th>
                <th>担当者</th>
                <th>詳細</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>ゴミ捨て</td>
                <td>明日の朝までに燃えるゴミを出す。</td>
                <td>田中太郎</td>
                <td>
                    <router-link to="/tasks/1">詳細</router-link>
                </td>
                <td>
                    <router-link to="/tasks/1/edit">編集</router-link>
                </td>
                <td>
                    <button>削除</button>
                </td>
            </tr>
            <tr>
                <th>2</th>
                <td>読書</td>
                <td>三四郎を100ページまで読む。</td>
                <td>鈴木次郎</td>
                <td>
                    <router-link to="/tasks/2">詳細</router-link>
                </td>
                <td>
                    <router-link to="/tasks/2/edit">編集</router-link>
                </td>
                <td>
                    <button>削除</button>
                </td>
            </tr>
            <tr>
                <th>3</th>
                <td>勉強</td>
                <td>数学の問題集を50ページまで解く。</td>
                <td>佐藤花子</td>
                <td>
                    <router-link to="/tasks/3">詳細</router-link>
                </td>
                <td>
                    <router-link to="/tasks/3/edit">編集</router-link>
                </td>
                <td>
                    <button>削除</button>
                </td>
            </tr>
        </tbody>
    </table>
</template>
