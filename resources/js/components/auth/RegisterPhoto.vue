<template>
<div class="card">
    <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>

    <div class="card-body">
        <form method="POST">

            <h3 class="text-center">Add a photo of yourself</h3>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="image-upload">
                        <label for="file-input">
                            <img img class="d-block w-70" style="width: 100%; height: 400px;" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTIxIiBoZWlnaHQ9IjYxNCIgdmlld0JveD0iMCAwIDkyMSA2MTQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNMzc0LjIyIDE0Ni4zM2MtMTYuNjE1IDIxLjUyLTI0LjIyMiA0Mi4yMzktMjIuNzIgNjIuMjU3IDEuNCAxNC4xMTMgMy42MDMgMzAuNDI5IDYuNjA1IDQ4Ljk0NmwtMi4yMDIgMi4yMDFjLTEuNTAxLjgwMi0zLjIwMyAzLjAwMy01LjAwNCA2LjcwNi0xLjkwMyAzLjcwNC0yLjgwMyA4LjUxLTIuODAzIDE0LjQxNC44IDEwLjQxIDIuNDAyIDE4LjMxNyA1LjAwNSAyMy45MjIgMi41MDIgNS41MDUgNS4xMDQgOC43MDggNy43MDcgOS40MDggMi41MDIuNyA1LjEwNCAyLjIwMyA3LjcwNiA0LjQwNSAyLjYwMyAyLjIwMSA0LjIwNCA1LjYwNSA1LjAwNSAxMC4wMDkgMy43MDQgMTcuMTE2IDkuNjA5IDMwLjYyOCAxNy43MTYgNDAuNjM3IDguMTA5IDEwLjAxIDEyLjIxMiAxOS4xMTggMTIuMjEyIDI3LjIyNSAwIDIyLjIyLTYuMzA2IDM5LjgzNy0xOC44MTcgNTIuODUtMTIuNTExIDEyLjkxMi0zNi4xMzQgMjUuNzIzLTcwLjg2NiAzOC4zMzQtNzUuMzcgMjYuNzI1LTExMy4wMDQgNDkuMzQ2LTExMy4wMDQgNjcuODYzdjU4Ljk1NWg1MjAuNDh2LTU4Ljk1NWMwLTE4LjUxNy0zNy42MzQtNDEuMTM4LTExMy4wMDUtNjcuODYzLTMzLjkzMS0xMi42MTEtNTcuMzUzLTI1LjMyMi03MC4wNjQtMzguNDM0LTEzLjAxMi0xMy4wMTItMTkuNDE4LTMwLjYyOS0xOS40MTgtNTIuODUgMC04LjIwNiA0LjIwNS0xNy4xMTUgMTIuNzEyLTI2LjcyNCA4LjQwNy05LjYxIDE0LjExMy0yMy4zMjIgMTcuMTE1LTQxLjEzOC43LTQuNDA0IDIuNDA0LTcuODA4IDUuMDA1LTEwLjAwOSAyLjUwMi0yLjIwMyA1LjEwNS0zLjcwNCA3LjcwOC00LjQwNCAyLjUwMi0uNzAxIDUuMTAzLTMuODA0IDcuNzA3LTkuNDA5IDIuNjAxLTUuNjA1IDQuMzA0LTEzLjUxMyA1LjAwNS0yMy45MjMgMC0xMi41MS0zLjQwNC0yMC4zMTgtMTAuMDEtMjMuMzJsNi42MDYtNDguOTQ1YzIuMjAxLTIwLjAyLTUuMjA1LTQwLjczOC0yMi4xMi02Mi4yNThDNTMxLjQ2NSAxMjQuNzEgNTAyLjMzOCAxMTQgNDYxIDExNGMtNDEuMzM4IDAtNzAuMzY1IDEwLjcxLTg2Ljc4IDMyLjMzeiIvPjwvZGVmcz48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNjZGUyZWYiIGQ9Ik0tMTItMTFoOTU4djYzOEgtMTJ6Ii8+PHVzZSBmaWxsLW9wYWNpdHk9Ii4zIiBmaWxsPSIjMDk3NEI2IiB4bGluazpocmVmPSIjYSIvPjwvZz48L3N2Zz4=" draggable="false"/>
                        </label>
                        <input id="file-input" type="file"  />
                    </div>

                </div>
            </div>
            <p class="text-center">Entering your real photo helps people find you online.</p>

            <div class="form-group row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">
                        Next
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</template>
