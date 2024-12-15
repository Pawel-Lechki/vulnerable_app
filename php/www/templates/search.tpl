{include file="header.tpl"}

<div class="container mt-5">
        <h1 class="text-center mb-4">Search Users</h1>
        <form method="get" action="/search" class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" name="q" placeholder="Enter username">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                {foreach $results as $result}
                <tr>
                    <td>{$result.id}</td>
                    <td>{$result.username|escape}</td>
                    <td>{$result.email|escape}</td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

{include file="footer.tpl"}