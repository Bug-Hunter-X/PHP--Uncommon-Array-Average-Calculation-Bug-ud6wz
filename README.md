# PHP: Uncommon Array Average Calculation Bug

This repository demonstrates a subtle bug in a PHP function designed to calculate the average of numbers in an array. The function correctly handles empty arrays, but it doesn't account for the possibility of division by zero if the array contains only zero values. This can lead to unexpected results or errors.

The `bug.php` file contains the buggy code, while `bugSolution.php` provides a corrected version.  The README outlines the issue and its solution.