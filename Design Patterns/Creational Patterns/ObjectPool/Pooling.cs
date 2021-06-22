using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ObjectPool
{
    public sealed class Pooling
    {
        //Properties
        private static readonly Pooling instance = new Pooling();
        public static Pooling Instance { get { return instance; } }
        private IPoolObject poolobject;
        private int i;
        public IPoolObject PoolObject {
            get
            {
                Console.WriteLine("Created a "+poolobject.ToString()+" "+ i++);
                return poolobject;
            }
            set
            {
                poolobject = value;
            }
        }
        //Constructor
        private Pooling()
        {

        }
    }
}
