kata/php
========

Flip a tree for a specific key
-----------------------------------

basically, make this:

     1
   /   \
  2     3
 / \   / \
4   5 6   7

into this:

     5
       \
        2
       / \
      4   1


Another Example would be this:

     1
   /   \
  2     3
       / \
      4   5

into this:

     2
   /   \
  3     1
 / \
4   5


The left most node becomes the root of flipped tree and its parent become its right child and the right sibling become its left child and same should be done for all left most nodes recursively.


sates:{
  {
    name: wyoming,

  }
   
}
