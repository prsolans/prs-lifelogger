


<h1>
            Life Logger
        </h1>
        <h2>
            Categories
        </h2>
        <form action="data/addActivity.php" method="post">
            <fieldset class="form-group">
                <label>
                    Category
                </label>
                <select id="selectCategory" name="category">
                    <option>
                        Select category
                    </option>
                </select>
            </fieldset>
            <fieldset class="form-group">
                <label>
                    Activity
                </label>
                <select id="selectActivity" name="activity">
                    <option>
                        Select activity
                    </option>
                </select>
            </fieldset>
            <button type="submit" class="btn btn-secondary">
                Add Activity
            </button>
        </form>
        <h2>Your Recent Activity</h2>
        <div id="recentActivities"></div>
