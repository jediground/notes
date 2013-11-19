/*
		Copyright:	2012 ByCN
		File Name:	creat_linkedlist.c
	  Description:	创建一个非循单环链表并遍历，节点插入，节点数目统计
	       Author:	CN 
		  Version:	1.0
			 Date:	2012-08-01
		  History:	none	

*/
#include "func.c"

/*声明函数*/
NODE *creat_list(void);
void traverse_linkedlist(NODE *p_root);
int sll_insert(NODE **linkp, int value);
int sll_count_nodes(NODE *p_first);
int sll_remove(NODE **linkp, NODE *p_del, int *del_val);

int 
main(void)
{
	NODE *p_root = NULL;
	int del_val;

	p_root = creat_list(); /*创建一个非循环单链表，返回根指针*/
	traverse_linkedlist(p_root);	/*遍历链表*/
	
	/*插入新结点*/
	if (0 == sll_insert(&p_root, 19))
	{
		printf("插入节点失败，请重试！");
	}

	printf("插入后的链表");
	traverse_linkedlist(p_root);

	printf("现在节点个数为:%d\n", sll_count_nodes(p_root->link));
	
	/*删除节点*/
	if (sll_remove(&p_root, p_root->link->link, &del_val))
	{
		printf("删除节点成功，被删除的节点的值为：%d\n", del_val);
	}
	
	printf("删除后的链表为：\n");
	traverse_linkedlist(p_root);

	free(p_root);
	return 0;
}

