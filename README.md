# Unexpected DateTime::modify behavior in PHP

This example demonstrates an unexpected behavior of the `DateTime::modify()` method in PHP when adding a month to the last day of a month that has a different number of days than the next month.

The issue is that `modify('+1 month')` doesn't always correctly handle the transition to the next month's equivalent date. Instead it rolls over to the last day of the next month.

**Bug Report:** The provided code demonstrates a common error where the expected output of adding one month to March 31st (2024-03-31) should result in April 30th. However, the `DateTime` object behaves unexpectedly in certain situations.

**Solution:** Use `DateTime::add()` method for more reliable month addition or a custom solution as shown below.