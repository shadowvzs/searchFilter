# searchFilter
Dynamic filter with dynamic route - Laravel + JS

This allow make the following searchs:

 examples:

user search after a word
> /search/**mask/word**
> /search/**1/pista**
 
user search after color aand category and size
> /search/**mask/color_slug/category_slug/size_slug**
> /search/**52/dark_red/home_use/big**
 
 
 ### Conclusion:
 You have allways *n* filter param + *1* param (mask) in url




### Note:
Mask is a number, what tell to us if a filter was included in url or no and every filter have a value.
In front end and backend the field names order in array is same :)

Example: 
color = 2
size = 3
key word = 5

mask = *2 ^ 2 + 2 ^ 3 + 2 ^ 5 = 4 + 8 + 32* = **44** 
