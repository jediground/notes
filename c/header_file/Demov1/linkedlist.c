/*
		Copyright:	2012 ByCN
		File Name:	creat_linkedlist.c
	  Description:	创建一个非循单环链表并遍历，节点插入，节点数目统计
	       Author:	CN 
		  Version:	1.0
			 Date:	2012-08-01
		  History:	none	

*/

#include "linkedlist.h"

/*
		 Function：	creat_linkedlist
	  Description:	创建非循单环链表，返回根指针
			calls:	stdio.h
					malloc.h
					stdlib.h
					NODE.h
		Called by:	none
			input:	void
		   output:	
		   return:	NODE *
		   others:	none
*/
NODE *
creat_list(void)
{
	int len;
	int i;
	int value;
	NODE *p_root; 
	NODE *p_tail;

	/*初始化根指针。不存放数据，用于指向第一个结点*/
	p_root = (NODE *)malloc(sizeof (NODE));
	if (NULL == p_root)
	{
		printf("根指针创建失败，请重试！");
		exit(-1);
	}
	
	/*初始化尾指针,并指向根指针*/
	p_tail = p_root;
	p_tail->link = NULL;

		
	printf("请输入您需要创建的链表的节点个数：");
	while (scanf("%d", &len),len < 0)
	{
		printf("您输入的结点个数有问题！请重新输入：");
	}
	
	
	for (i = 0; i < len; i++)
	{
		NODE *p_new; /*创建新结点*/

		printf("请输入第%d个结点的值:", i+1);
		scanf("%d", &value);

		/*分配空间并储存数据*/
		p_new = (NODE *)malloc(sizeof (NODE));
		if (NULL == p_new)
		{
			printf("结点创建失败，请重试！");
			exit(-1);
		}
		p_new->value = value;	/*在新结点里存值*/
		p_tail->link = p_new;	/*将原尾指针指向新指针*/
		p_new->link  = NULL;	/*将新指针指针域清空*/
			  p_tail = p_new;	/*将新指针转化为尾指针*/
	}

	return p_root;
}

/*
		 Function：	traverse_linkedlist
	  Description:	遍历链表节点
			calls:	stdio.h
					NODE.h
		Called by:	none
			input:	void
		   output:	NODE * 类型的根指针
		   return:	void
		   others:	none	
*/
void 
traverse_linkedlist(NODE *p_root)
{
	NODE *p_current = p_root->link;

	/*输出链表*/
	printf("该链表元素值为：");
	while (NULL != p_current)
	{
		printf("%d ", p_current->value);
		p_current = p_current->link;
	}

	printf("\n");
	
	return ;
}

/*
		 Function：	sll_insert(ssl:single linked list)
	  Description:	在单链表里插入一个节点(按字典顺序大小排列)
			calls:	stdio.h
					malloc.h
					NODE.h
		Called by:	none
			input:	NODE **linkp, int value.
					linkp指向根指针的指针
					value需要插入的值
		   output:	none
		   return:	int : 0/1
		   others:	none		
*/
int 
sll_insert(NODE **linkp, int value)
{
	NODE *p_current;
	NODE *p_new_node;

	// 寻找需要插入的位置
	while ((p_current=*linkp) != NULL && p_current->value <= value)
	{
		linkp = & p_current->link;
	}

	// 分配空间
	p_new_node = (NODE*)malloc(sizeof (NODE));
	if (p_new_node == NULL)
	{
		return FALSE
	}
	p_new_node->value = value;

	// 插入数据
	*linkp = p_new_node;
	p_new_node->link = p_current;
	return TRUE;
}

/*
		 Function：	sll_count_nodes(ssl:singly linked list)
	  Description:	在单链表里计算节点的个数
			calls:	stdio.h
					NODE.h 
		Called by:	none
			input:	NODE *p_root 
					p_root 根指针
		   output:	none
		   return:	int 节点个数
		   others:	none		
*/
int 
sll_count_nodes(NODE *p_root)
{
	int count;

	for (count = 0; p_root != NULL; p_root = p_root->link)
	{
		count++;
	}

	return count - 1;
}

/*
		 Function：	sll_remove
	  Description:	在单链表删除指定指针节点的值
			calls:	stdio.h
					NODE.h 
					assert.h
		Called by:	none
			input:	NODE **kinkp, NODE *p_del, int *del_val
					kinkp	指向根指针的指针
					p_del	需要删除的节点的指针
					del_val 被删除的节点的值
		   output:	none
		   return:	int 0/1
*/
int
sll_remove(NODE **linkp, NODE *p_del, int *del_val)
{
	register NODE *p_current;

	assert(NULL != p_del);

	/*寻找要删除的节点*/
	while (NULL != (p_current = *linkp) && p_current != p_del)
	{
		linkp = &p_current->link;
	}

	if (p_current == p_del)
	{
		*del_val = p_current->value;
		*linkp = p_current->link;
		free(p_current);
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

/*
		 Function：	sll_bub_sort
	  Description:	将单链表值按字典顺序排列，使用冒泡法
			calls:	stdio.h
					NODE.h 
		Called by:	none
			input:	NODE *p_root
					p_root 根指针
		   output:	none
		   return:	void
*/
void sll_sel_sort(NODE *p_root)
{
	int i, j;
	NODE *p, *q;
	int len = sll_count_nodes(p_root);

	for (i = 0, p = p_root->link; i < len -1; i++, p = p->link)
	{
		for (j = i + 1, q = p->link; j < len; j++, q = q->link)
		{
			if (p->value > q->value)
			{
				p->value = p->value + q->value;
				q->value = p->value - q->value;
				p->value = p->value - q->value;
			}
			
		}
	}

	return ;
}