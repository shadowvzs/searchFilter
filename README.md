# searchFilter
Dynamic filter with dynamic route - Laravel + JS

This allow make the following searchs:

 examples:

user search after a word
> /search/**mask/word**
 
user search after color aand category and size
> /search/**mask/color_slug/vategory_slug/size_slug**
 
 
 ### Conclusion:
 You have allways *n* filter param + *1* param (mask) in url




### Note:
Mask is a number, what tell to us if a filter was included in url or no and every filter have a value.

Example: 
color = 2
size = 3
key word = 5

mask = *2 ^ 2 + 2 ^ 3 + 2 ^ 5 = 4 + 8 + 32* = **44** 
