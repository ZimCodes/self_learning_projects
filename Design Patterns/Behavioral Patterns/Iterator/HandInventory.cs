using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Iterator
{
    class HandInventory : IInventory<Item>
    {
        public Item Left { get; private set; }
        public Item Right { get; private set; }
        public HandInventory(Item left, Item right)
        {
            this.Left = left;
            this.Right = right;
        }
        public IInventoryIterator<Item> GetIterator()
        {
            return new HandInventoryIterator(this);
        }
    }
}
