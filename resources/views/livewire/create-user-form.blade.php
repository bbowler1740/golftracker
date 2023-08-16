<div>
    <h1>Create a new user</h1>
    <form action="/users" method="post">
        @csrf
        <label>
            User Name
            <input type="text">
        </label>
        <br>
        <label>
            Email
            <input type="email">
        </label>
        <br>
        <label>
            Handicap
            <input type="text">
        </label>
        <br>
        <label>
            Dexterity
            <input type="text">
        </label>
        <br>
        <label>
            Weight
            <input type="text">
        </label>
        <br>
        <label>
            Height
            <input type="text">
        </label>
        <br>
        <label>
            Age
            <input type="text">
        </label>
        <br>
        <label>
            Gender
            <input type="text">
        </label>
        <br>
        <label>
            Password
            <input type="password">
        </label>
        <br>
        <input type="submit" name="submit" id="submit">
    </form>
</div>
