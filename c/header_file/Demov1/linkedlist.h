/*声明函数*/
#ifndef _LINKLIST_
#define _LINKLIST_

#include <stdio.h>
#include <stdlib.h>
#include <malloc.h>
#define FALSE 0;
#define TRUE 1;
#include <assert.h>

/*
	定义单链表专用结构体
	本应该放入NODE.h文件
*/
typedef
struct Node
{
	int value;
	struct Node *link; /*指针域*/
}NODE;

NODE *creat_list(void);
void traverse_linkedlist(NODE *p_root);
int sll_insert(NODE **linkp, int value);
int sll_count_nodes(NODE *p_root);
int sll_remove(NODE **linkp, NODE *p_del, int *del_val);
void sll_sel_sort(NODE *p_root);
#endif