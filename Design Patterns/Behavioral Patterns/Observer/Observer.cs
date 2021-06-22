using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Observer
{
    enum ObserverState { Moving, Still}
    class Observer : IObserver
    {
        public ObserverState state;
        private Subject subject;
        public Observer(Subject subject)
        {
            state = ObserverState.Moving;
            this.subject = subject;
        }
        public void Update()
        {
            switch (subject.state)
            {
                case SubjectState.Happy:
                    state = ObserverState.Moving;
                    break;
                case SubjectState.Sad:
                    state = ObserverState.Still;
                    break;
            }
        }
    }
}
