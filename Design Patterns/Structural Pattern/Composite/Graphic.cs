using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Composite
{
    abstract class Graphic
    {
        public virtual void Draw() { }
        public virtual void Add(Graphic g) { }
        public virtual void Remove(Graphic g) { }
        public virtual Graphic GetChild(int index) { return null; }
    }
}
