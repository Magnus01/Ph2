var countOperators = function(list)
{
    var count = 0;
    for (var i = 0; i <list.length; i++)
    {
        if (isNaN(list[i]))
        {
                    count += 1;
        }
    }

    return count;
}

// must be added to students solution.
exports.countOperators = countOperators;
